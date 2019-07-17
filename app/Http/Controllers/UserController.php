<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        //$users = DB::select('select * from users');
      //return view('listuser',['users'=>$users]);
        $user = new User();
        $users = $user->all();
      return view('listuser')->with('users', $users);
    }

    public function edit($id){
        $user = new User();
        $getUser = $user->find($id)->toArray();
      return view('edituser')->with('getUser', $getUser);
    }

    public function update(Request $request){
        $HoTenNV = $request->input('HoTenNV');
        //$ChucVu = $request->input('ChucVu');
        //$TenPB = $request->input('TenPB');
        $Level = $request->input('Level');
        $id = $request->input('id');
        $user = new User();
        $getUser = $user->find($id);
        $getUser->HoTenNV = $HoTenNV;
        //$getUser->ChucVu = $ChucVu;
        //$getUser->TenPB = $TenPB;
        $getUser->Level = $Level;
        $getUser->save();
      return redirect()->intended('user');
    }

    public function destroy($id){
        User::find($id)->delete();
        return redirect()->intended('user');
    }
}
