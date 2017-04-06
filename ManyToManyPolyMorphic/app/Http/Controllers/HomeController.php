<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\video;

class HomeController extends Controller
{
    public function index()
    {
    	$post = post::find(2);
    	return $post->tags;

    	//return view('welcome');
    }
}
