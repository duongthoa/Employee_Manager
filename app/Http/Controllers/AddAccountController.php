<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Auth;

class AddAccountController extends Controller
{
    public function insertform() {
      return view('addaccount');
    }
	
    public function insert(Request $request) {
        $rules = [
            'HoTenNV' =>'required',
            'username' =>'required',
            'email' =>'required|email',
            'password' => 'required|min:6',
            'level' =>'required'
        ];
        $messages = [
            'HoTenNV.required' => 'Tên nhân viên là trường bắt buộc',
            'username.required' => 'Tên đăng nhập là trường bắt buộc',
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
            'level.required' => 'Level là trường bắt buộc',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $HoTenNV = $request->input('HoTenNV');
            $username = $request->input('username');
            $email = $request->input('email');
            $password = $request->input('password');
            $password = bcrypt($password);
            $level = $request['level'];
        
            $user = new User();
            $user->HoTenNV = $HoTenNV;
            $user->username = $username;
            $user->email = $email;
            $user->password = $password;
            $user->CheckLogin = 0;
            $user->level = $level;
            // $user->
            $user->save();
            return redirect()->intended('user');
        }
    }
}
