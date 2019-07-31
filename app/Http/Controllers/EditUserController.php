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

class EditUserController extends Controller
{
    public function index(){
        //$users = DB::select('select * from users');
      //return view('listuser',['users'=>$users]);
        //$user = new User();
        $users = User::all();
        //$user = User::find(1);
      return view('liststaff')->with('users', $users);
    }

    public function edit($id){
        $phongbans = Phongban::all();
        //$users = User::all();
        $user = new User();
        $getUser = $user->find($id)->toArray();
      return view('editstaff', ['phongbans' => $phongbans, 'getUser' => $getUser]);
    }

    public function update(Request $request){
        $HoTenNV = $request->input('HoTenNV');
        $ChucVu = $request['ChucVu'];
        $user_id = $request->input('id');
        $TenPB = $request['TenPB'];
        $Level = $request['level'];
        $id = $request->input('id');

        $user = new User();
        $getUser = $user->find($id);
        $getUser->HoTenNV = $HoTenNV;
        $getUser->Level = $Level;
        $getUser->save();

        $phongban = new Phongban_user();
        $getPhongban = $phongban->find($user_id);
        $getPhongban->phongban_id = $TenPB;
        $getPhongban->ChucVu = $ChucVu;
        $getPhongban->save();
      return redirect()->intended('edituser');
    }
}
