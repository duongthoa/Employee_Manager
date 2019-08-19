<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Auth;
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
            //$email = $request->input('email');
            $username = $request->input('username');
			$password = $request->input('password');
    		if( Auth::attempt(['username' => $username, 'password' => $password]) ) {
				if( Auth::user()->CheckLogin == 0){
					return redirect()->intended('resetpass');
				}
				else {
					if ( Auth::user()->Level == 1)
						return redirect()->intended('/root');
					else
						return redirect()->intended('/home');
				}
    		} else {
    			$errors = new MessageBag(['errorlogin' => 'Tên đăng nhập hoặc mật khẩu không đúng!']);
				return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
	}
	
	public function getLogout() {
        Auth::logout();
        return redirect()->intended('/');
     }
}
