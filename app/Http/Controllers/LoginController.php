<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    		// 'email' =>'required|email',
    		'password' => 'required|min:8'
    	];
    	$messages = [
    		//'email.required' => 'Email là trường bắt buộc',
            //'email.email' => 'Email không đúng định dạng',
            'username.required' => 'Tên đăng nhập là trường bắt buộc',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);

    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
            //$email = $request->input('email');
            $username = $request->input('username');
    		$password = $request->input('password');

    		if( Auth::attempt(['username' => $username, 'password' =>$password])) {
    			return redirect()->intended('/');
    		} else {
    			$errors = new MessageBag(['errorlogin' => 'Tên đăng nhập hoặc mật khẩu không đúng']);
    			return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
    }
}
