<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function Login()
    {
    	//这是前台登录页面
    	return view('homes.Login');
    }
}
