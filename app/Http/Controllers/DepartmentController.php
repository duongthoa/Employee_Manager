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

class DepartmentController extends Controller
{
    public function index(){
        $phongban = new Phongban();
        $phongbans = $phongban->all();
      return view('listdepartment')->with('phongbans', $phongbans);
    }

    public function edit($id){
        $phongban = new Phongban();
        $getPhongban = $phongban->find($id)->toArray();
      return view('editdepartment')->with('getPhongban', $getPhongban);
    }

    public function update(Request $request){
        $TenPB = $request->input('TenPB');
        $id = $request->input('id');
        $phongban = new Phongban();
        $getPhongban = $phongban->find($id);
        $getPhongban->TenPB = $TenPB;
        $getPhongban->save();
        session()->flash('success', 'Cập nhật dữ liệu thành công');
      return redirect()->intended('department');
    }

    public function destroy($id){
        $phongban_id = $id;
        $data = Phongban_user::where('phongban_id', $phongban_id)->get('user_id')->toArray();
        Phongban_user::where('phongban_id', $phongban_id)->delete();
        Phongban::find($id)->delete();
        foreach ($data as $value) {
          User::where('id', $value)->delete();
        }
        session()->flash('success', 'Xóa dữ liệu thành công');
        return redirect()->intended('department');
    }
}
