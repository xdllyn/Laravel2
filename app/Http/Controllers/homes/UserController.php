<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function User()
    {
    	//个人中心页面
    	return view('homes.User');
    }
}
