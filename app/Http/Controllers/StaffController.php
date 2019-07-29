<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Phongban;
use App\Models\Phongban_user;
use Validator;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller{
    public function index(){
        //$user = new User();
        //$users = $user->all();
      return view('inforuser');//->with('users', $users);
    }

    public function edit(){
      return view('editinforuser');//->with('getUser', $getUser);
      //return view('editinforuser')->with('user', $user);
    }

    public function update(Request $request){
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $password = bcrypt($password);
        $HoTenNV = $request->input('HoTenNV');
        $NgaySinh = $request['NgaySinh'];
        $DiaChi = $request->input('DiaChi');
        $GioiTinh = $request['GioiTinh'];
        $SDT = $request->input('SDT');
        $id = $request->input('id');

        $user = User::find(Auth::user()->id);
        $user->username = $username;
        $user->email = $email;
        $user->password = $password;
        $user->HoTenNV = $HoTenNV;
        $user->NgaySinh = $NgaySinh;
        $user->DiaChi = $DiaChi;
        $user->GioiTinh = $GioiTinh;
        $user->SDT = $SDT;
        // $user->
        $user->save();
      return redirect()->intended('staff');
    }

    public function show(){
        $getusers = User::find(Auth::user()->id);
        if( $getusers->phongbans[0]->pivot->ChucVu == 'Trưởng phòng'){
          $users = User::all();
          foreach ($users as $user) {
            if( $user->phongbans[0]->TenPB == 'Bộ phận quản lý'){
            $Users = User::whereHas('phongbans', function ($query) { $query->where('TenPB', 'like', 'Bộ phận quản lý%'); $query->where('ChucVu', 'like', 'Nhân viên%');})->get();
            return view('inforstaff', ['getusers' => $getusers, 'users' => $users, 'Users' => $Users]);
            }
            elseif($user->phongbans[0]->TenPB == 'Bộ phận kỹ thuật'){
              $Users = User::whereHas('phongbans', function ($query) { $query->where('TenPB', 'like', 'Bộ phận kỹ thuật%'); $query->where('ChucVu', 'like', 'Nhân viên%');})->get();
              return view('inforstaff', ['getusers' => $getusers, 'users' => $users, 'Users' => $Users]);
            }
            elseif($user->phongbans[0]->TenPB == 'Bộ phận truyền thông'){
                $Users = User::whereHas('phongbans', function ($query) { $query->where('TenPB', 'like', 'Bộ phận truyền thông%'); $query->where('ChucVu', 'like', 'Nhân viên%');})->get();
                return view('inforstaff', ['getusers' => $getusers, 'users' => $users, 'Users' => $Users]);
            }
            elseif($user->phongbans[0]->TenPB == 'Bộ phận tuyển dụng'){
              $Users = User::whereHas('phongbans', function ($query) { $query->where('TenPB', 'like', 'Bộ phận tuyển dụng%'); $query->where('ChucVu', 'like', 'Nhân viên%');})->get();
              return view('inforstaff', ['getusers' => $getusers, 'users' => $users, 'Users' => $Users]);
          }
          }
        }
        else
					return redirect()->intended('/home');
    }

    public function usersListPhpExcel(){
        $fileType = \PHPExcel_IOFactory::identify(resource_path('excels/users_template.xlsx'));
        $objReader = \PHPExcel_IOFactory::createReader($fileType);
        $objPHPExcel = $objReader->load(resource_path('excels/users_template.xlsx')); 

        $getusers = User::find(Auth::user()->id);
        if( $getusers->phongbans[0]->pivot->ChucVu == 'Trưởng phòng' && $getusers->phongbans[0]->TenPB == 'Bộ phận quản lý'){
        $userData = User::whereHas('phongbans', function ($query) { $query->where('TenPB', 'like', 'Bộ phận quản lý%'); $query->where('ChucVu', 'like', 'Nhân viên%');})->get();
        }
        elseif( $getusers->phongbans[0]->pivot->ChucVu == 'Trưởng phòng' && $getusers->phongbans[0]->TenPB == 'Bộ phận kỹ thuật'){
          $userData = User::whereHas('phongbans', function ($query) { $query->where('TenPB', 'like', 'Bộ phận kỹ thuật%'); $query->where('ChucVu', 'like', 'Nhân viên%');})->get();
        }
        elseif( $getusers->phongbans[0]->pivot->ChucVu == 'Trưởng phòng' && $getusers->phongbans[0]->TenPB == 'Bộ phận truyền thông'){
          $userData = User::whereHas('phongbans', function ($query) { $query->where('TenPB', 'like', 'Bộ phận truyền thông%'); $query->where('ChucVu', 'like', 'Nhân viên%');})->get();
        }
        elseif( $getusers->phongbans[0]->pivot->ChucVu == 'Trưởng phòng' && $getusers->phongbans[0]->TenPB == 'Bộ phận tuyển dụng'){
          $userData = User::whereHas('phongbans', function ($query) { $query->where('TenPB', 'like', 'Bộ phận tuyển dụng%'); $query->where('ChucVu', 'like', 'Nhân viên%');})->get();
        }

        $this->addDataToExcelFile($objPHPExcel->setActiveSheetIndex(0), $userData); 

        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

        $path = 'excel/import/' . time() . 'DSNV.xlsx'; 
        $objWriter->save(public_path($path)); 
        return redirect($path);
    }

    private function addDataToExcelFile ($setCell, $userData){
        $index = 1;
        $row = 7;  
        foreach ($userData as $key => $item) {
            $setCell
                ->setCellValue('B' . $row, $item->id) 
                ->setCellValue('C' . $row, $item->HoTenNV)
                ->setCellValue('D' . $row, $item->email)
                ->setCellValue('E' . $row, $item->NgaySinh)
                ->setCellValue('F' . $row, $item->GioiTinh)
                ->setCellValue('G' . $row, $item->SDT)
                ->setCellValue('H' . $row, $item->DiaChi);
            $index++;
            $row++;
        }

        $setCell->getStyle("B7:H" . ($index+10) )->applyFromArray(array(
            'borders' => array(
                'outline' => array(
                    'style' => \PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array('argb' => '000000'),
                    'size' => 1,
                ),
                'inside' => array(
                    'style' => \PHPExcel_Style_Border::BORDER_THIN,
                    'color' => array('argb' => '000000'),
                    'size' => 1,
                ),
            ),
        ));
        return $this;
    }
}
