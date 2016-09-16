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

Route::get('/', 'WelcomeController@index');
Route::resource('lists', 'ListsController');

// About Routes
Route::get('contact', 
	['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact',
	['as' => 'contact_store', 'uses' => 'AboutController@store']);


    

