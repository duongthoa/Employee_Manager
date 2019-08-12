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
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

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
        session()->flash('success', 'Cập nhật dữ liệu thành công');
      return redirect()->intended('user');
    }

    public function destroy($id){
        $user_id = $id;
        Phongban_user::find($user_id)->delete();
        User::find($id)->delete();
        session()->flash('success', 'Xóa dữ liệu thành công');
      return redirect()->intended('user');
    }

    public function show(){
        $users = User::all();
      return view('listuserpass', ['users' => $users]);
    }

    public function resetpassword($id){
        $password = str_random(6);
        $user = new User();
        $user = $user->find($id);
        $user->password = bcrypt($password);
        $user->CheckLogin = 0;
        $user->save();
        Mail::send('mailresetpass', array('HoTenNV'=>$user->HoTenNV, 'username'=>$user->username, 'password'=>$password), function($message) use ($user){
          $message->subject('Notifications Mail');
          $message->to($user->email);
        });
        session()->flash('success', 'Reset pasword thành công');
      return redirect()->intended('userpass');
    }

    public function resetpasswordall(Request $request){
        //$users = User::all();
        $users = $request->input('id');
        foreach ($users as $value) {
          $password = str_random(6);
          $getUser = new User();
          $getUser = $getUser->find($value);
          $getUser->password = bcrypt($password);
          $getUser->CheckLogin = 0;
          $getUser->save();
          Mail::send('mailresetpass', array('HoTenNV'=>$getUser->HoTenNV, 'username'=>$getUser->username, 'password'=>$password), function($message) use ($getUser){
            $message->subject('Notifications Mail');
            $message->to($getUser->email);
          });
        }
        session()->flash('success', 'Reset pasword thành công');
      return redirect()->intended('userpass');
    }
}
