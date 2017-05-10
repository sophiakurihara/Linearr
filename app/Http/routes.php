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

Route::get('/', 'UsersController@displayHomepage');

Route::post('/register', 'UsersController@registerUser');
Route::get('/register', 'UsersController@displayRegister');

Route::post('/login', 'UsersController@loginUser');
Route::get('/login', 'UsersController@displayLogin');

Route::get('/logout', 'UsersController@logout');

Route::get('/profile/{user_id}', 'UsersController@displayMyProfile');