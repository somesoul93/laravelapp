<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('pages.homepage');
});*/

/*Route::get('about', function(){
	$halaman = 'about';
	return view('pages.about',compact('halaman'));
});*/
/*Route::get('siswa', function(){
	$halaman = 'siswa';
	$siswa = ['Rasmus Lerdorf', 'Taylor Otwell', 'Brendan Eich', 'John Resig'];
	return view('siswa.index',compact('halaman','siswa'));
});*/

Route::get('/','PagesController@homepage');
Route::get('about','PagesController@about');
Route::get('siswa','SiswaController@index');
Route::get('siswa/create','SiswaController@create');
Route::post('siswa','SiswaController@store');


