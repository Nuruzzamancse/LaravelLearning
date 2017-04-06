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

/*Route::get('/', function () {
    return view('welcome');//welcome.blade.php
});
/*Route::get('about',function () {

	$bitfumes = ['This','is','Nuruzzaman','Khan'];
    //return view('about',['bitfumes'=>$bitfumes]);//about.blade.php

    //return view('about')->with(['bitfumes'=>$bitfumes]);

    //return view('about')->withbitfumes($bitfumes);

    return view('about',compact('bitfumes'));





});*/

Route::get('/','HomeController@index');
Route::get('Nofile','PagesController@Nofile');
Route::get('About','PagesController@About');
Route::resource('songs','SongsController');
