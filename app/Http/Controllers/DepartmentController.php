<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Phongban;
use Validator;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    public function index(){
        $phongban = new Phongban();
        $phongbans = $phongban->all();
      return view('listdepartment')->with('phongbans', $phongbans);
    }

    public function edit($id){
        $phongban = new Phongban();
        $getPhongban = $phongban->find($id)->toArray();
      return view('editdepartment')->with('getPhongban', $getPhongban);
    }

    public function update(Request $request){
        $TenPB = $request->input('TenPB');
        $id = $request->input('id');
        $phongban = new Phongban();
        $getPhongban = $phongban->find($id);
        $getPhongban->TenPB = $TenPB;
        $getPhongban->save();
      return redirect()->intended('department');
    }

    public function destroy($id){
        Phongban::find($id)->delete();
        return redirect()->intended('department');
    }
}
