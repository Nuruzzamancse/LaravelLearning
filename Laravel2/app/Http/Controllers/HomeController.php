<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class HomeController extends Controller
{
    public function index()
    {
    	$user = user::find(1);
    	//return $user;
    	return view('welcome',compact('user'));

    }
}
