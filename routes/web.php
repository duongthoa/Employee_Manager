<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin');
});

Route::get('/home', function () {
    return view('staff');
});

//Route::get('/', 'HomeController@getIndex');

Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');
Route::get('logout','LoginController@getLogout');

//Route::get('logout','HomeController@getLogout');

Route::get('resetpass','ResetPassController@show');
Route::post('resetpass','ResetPassController@reset');

Route::get('addaccount','AddAccountController@insertform');
Route::post('addaccount','AddAccountController@insert');

Route::get('user','UserController@index');
Route::get('user/{id}/edit','UserController@edit');
Route::post('user/update','UserController@update');
Route::get('user/{id}/delete','UserController@destroy');

Route::get('adddepartment','AddDepartmentController@insertform');
Route::post('adddepartment','AddDepartmentController@insert');

Route::get('department','DepartmentController@index');
Route::get('department/{MaPB}/edit','DepartmentController@edit');
Route::post('department/update','DepartmentController@update');
Route::get('department/{MaPB}/delete','DepartmentController@destroy');

Route::get('staff','StaffController@index');
Route::get('staff/edit','StaffController@edit');
Route::post('staff/update','StaffController@update');

Route::get('inforstaff','StaffController@show');