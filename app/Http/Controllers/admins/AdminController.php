<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function ind()
    {
    	//这是后台主页
    	return view('admins.ind');
    }
}
