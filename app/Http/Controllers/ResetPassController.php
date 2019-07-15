<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class ResetPassController extends Controller
{
    public function show($username) {
        $users = DB::select('select * from student where username = ?',[$username]);
        return view('resetpass',['users'=>$users]);
    }
     public function reset(Request $request,$username) {
        $password = $request->input('password');
        DB::update('update users set password = ?, CheckLogin = 1 where username=?',[$password,$username]);
        echo "Thay đổi mật khẩu thành công.<br/>";
        echo '<a href = "/">Click Here</a> to go back.';
    }
}
