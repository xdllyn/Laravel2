<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Org\code\Code;

class LoginController extends Controller
{
    //后台登录
    public function Login()
    {
    	return view('admins.Login');
    }
    //生成验证码
    public function  code()
    {
    	$code = new Code();

    }
}
