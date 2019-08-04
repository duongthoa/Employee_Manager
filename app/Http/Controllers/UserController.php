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

class UserController extends Controller
{
    public function index(){
        //$users = DB::select('select * from users');
      //return view('listuser',['users'=>$users]);
        //$user = new User();
        $users = User::all();
        //$user = User::find(1);
      return view('listuser')->with('users', $users);
    }

    public function edit($id){
        $user = new User();
        $getUser = $user->find($id)->toArray();
      return view('edituser', ['getUser' => $getUser]);
    }

    public function update(Request $request){
        $HoTenNV = $request->input('HoTenNV');
        $username = $request->input('username');
        $email = $request->input('email');
        $Level = $request['level'];
        $id = $request->input('id');

        $user = new User();
        $getUser = $user->find($id);
        $getUser->HoTenNV = $HoTenNV;
        $getUser->username = $username;
        $getUser->email = $email;
        $getUser->Level = $Level;
        $getUser->save();

      return redirect()->intended('user');
    }

    public function destroy($id){
        $user_id = $id;
        Phongban_user::find($user_id)->delete();
        User::find($id)->delete();
        return redirect()->intended('user');
    }

    public function show(){
      $users = User::all();
    return view('listuserpass')->with('users', $users);
  }
}
