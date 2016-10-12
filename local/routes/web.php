<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function(){
	return view('welcome');
});
Route::get('maytinh','Democontroller@getform');
Route::post('maytinh','Democontroller@postform');
Route::get('query', function(){
	DB::table('users')->insert(
	[
	[
		'user_fullname'=>'Quan Tri',
		'user_name'=>'admin',
		'user_pass'=>'123',
		'user_mail'=>'admin@gmail.com',
		'user_level'=>1,
	],
[
	'user_fullname'=>'Nguyen Van A',
	'user_name'=>'nguyenvana',
	'user_pass'=>'123',
	'user_mail'=>'nguyenvana@gmail.com',
	'user_level'=>2,
]
]);
});
Route::get('login','userController@getlogin');
Route::post('login','userController@postlogin');
Route::get('session', function(){
	Session::put('course','Lavarel');
	dd(Session::all());
});
Route::get('xyz','DemoController@getpaginate');
Auth::routes();

Route::get('/home', 'HomeController@index');
