<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    public function index(){
        //$user = new User();
        //$users = $user->all();
      return view('inforuser');//->with('users', $users);
    }

    public function edit(){
        //$user = Auth::user();
        //$user = new User();
        //$getUser = $user->find($id)->toArray();
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

        //$user = new User();
        //$getUser = $user->find($id);
        //$getUser->HoTenNV = $HoTenNV;
        //$getUser->ChucVu = $ChucVu;
        //$getUser->TenPB = $TenPB;
        //$getUser->Level = $Level;
        //$getUser->save();
      return redirect()->intended('staff');
    }

}
