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

Route::get('/', function () {
	$tasks = [
        'go to the store',
        'go to the market',
        'go to the work'

	];
    return view('welcome',[
    	'tasks' => $tasks,
    	'foo' => request('title')
    ]);
});

Route::post('/chitrokor','imageController@store');

Route::get('app',function(){
	return view('layout.app');
});

Route::get('home',function(){
	return view('chitrokor.home');
});

Route::get('/chitrokor',function(){
	return view('chitrokor.admin');
});
Route::resource('','chitrokorController');

Route::get('admin',function(){
	return view('chitrokor.admin');
});

Route::get('/gallery','imageController@gallery');
Route::get('/blog','imageController@blog');
Route::get('/retrive','imageController@retrive');

// Route::get('contact',function(){
//     return view('chitrokor.contact');
// });

Route::get('/contact','ContactController@create');
Route::post('/contact','ContactController@store');
