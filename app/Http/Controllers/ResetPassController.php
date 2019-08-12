<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ResetPassController extends Controller
{
    public function show() {
       
        return view('resetpass');
    }
     public function reset(Request $request) {
        $rules = [
            'password' => 'required|min:6',
            'password_confirm' => 'required|same:password',
    	];
    	$messages = [
    		'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
            'password_confirm.required' => 'Xác nhận mật khẩu là trường bắt buộc',
            'password_confirm.same' => 'Xác nhận mật khẩu không đúng',
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);
    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
            //dd(Auth::user()->id);
            $password = $request->input('password');
            $password = bcrypt($password);
        
            //dd($password);
            $user = User::find(Auth::user()->id);
            $user->password = $password;
            $user->CheckLogin = 1;
            // $user->
            $user->save();
            if ( Auth::user()->Level == 1){
                session()->flash('success', 'Cập nhật dữ liệu thành công');
                return redirect()->intended('/');
            }
            else{
                session()->flash('success', 'Cập nhật dữ liệu thành công');
                return redirect()->intended('/home');
            }
        }
    }
}