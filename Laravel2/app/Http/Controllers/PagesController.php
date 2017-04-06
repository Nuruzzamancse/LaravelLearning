<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
    	return view('welcome');
    }

     public function NoFile()
    {
    	return view('NoFile');
    }

    public function About()
    {
    		
		$bitfumes = ['This','is','Nuruzzaman','Khan'];
    //return view('about',['bitfumes'=>$bitfumes]);//about.blade.php

    //return view('about')->with(['bitfumes'=>$bitfumes]);

    //return view('about')->withbitfumes($bitfumes);

     	return view('about',compact('bitfumes'));
    }


}
