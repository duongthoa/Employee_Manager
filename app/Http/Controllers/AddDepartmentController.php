<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Phongban;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AddDepartmentController extends Controller
{
    public function insertform() {
      return view('adddepartment');
    }
	
    public function insert(Request $request) {
        $rules = [
            'TenPB' =>'required'
        ];
        $messages = [
            'TenPB.required' => 'Tên phòng ban là trường bắt buộc',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $TenPB = $request->input('TenPB');
        
            $phongban = new Phongban();
            $phongban->TenPB = $TenPB ;
            // $phongban->
            $phongban->save();
            session()->flash('success', 'Thêm phòng ban thành công');
            return redirect()->intended('department');
        }
    }
}
