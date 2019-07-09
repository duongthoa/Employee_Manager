<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    public function getLogin() {
    	return view('login');
    }
    public function postLogin(Request $request) {
    	$rules = [
    		'password' => 'required|min:6'
    	];
    	$messages = [
            'username.required' => 'Tên đăng nhập là trường bắt buộc',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);

    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
				$login = [
					'username' => $request->input('username'),
					'password' => $request->input('password'),
					'level' => 1,
					'CheckLogin' => 0
				];
				if( DB::table('users')->where($login)->count()==1) {
				return redirect()->intended('/');
    		} else {
    			$errors = new MessageBag(['errorlogin' => 'Tên đăng nhập hoặc mật khẩu không đúng!']);
				return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
    }
}
