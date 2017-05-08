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

Route::get('/', function () {
    return view('auth/home');
});

Route::get('/profile', function () {
	return view('profile');
});

// Events pages
Route::get('/events', function() {
	return view('events/index');
});
Route::get('/events/create', function () {
	return view('events/create');
});
