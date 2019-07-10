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
    return view('welcome');
});

//Route::get('/', 'HomeController@getIndex');

Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');

Route::get('update/{id}','PassUpdateController@show');
Route::post('update/{id}','PassUpdateController@edit');

//Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
//Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);

//Route::get('login','Auth\LoginController@getLogin');
//Route::post('login','Auth\LoginController@postLogin');


