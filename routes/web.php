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
//前台页面=============================================================

//前台首页
Route::group([''],function(){
	Route::get('/home/index','homes\HomeController@index');

	Route::get('/home/Login','homes\LoginController@Login');

	Route::get('/home/User','homes\UserController@User');
});
//后台页面==============================================================
	//后台主页
	Route::get('/admins/ind','admins\AdminController@ind');
	//后台登录
	Route::get('/admins/login','admins\LoginController@Login');
	//生成验证码
	Route::get('/admins/code','admins\LoginController@Code');

	

