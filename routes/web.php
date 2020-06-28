<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout',function(){
	return view('layout');
});
Route::get('/contact',function(){
	return view('contact');
});
Route::get('/test',function(){
	return view('test');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
