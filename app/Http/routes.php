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

Route::get('/create-event', 'EventsController@showCreateEvent');
Route::post('/create-event', 'EventsController@createEvent');

Route::get('/get-calendar-events', 'EventsController@fullCalendarEvents');


Route::get('/settings', 'UsersController@settings');

Route::get('/contacts', 'ContactsController@showContactsPage');



/* ---- API ROUTES ---- */


Route::get('/text-me', function() {
	$t = new \App\Twilio;
	$t->sendText('+12107748500', 'hey!');
});

// Keeps the google site verified
Route::get('/googleb1dd29d83578768f.html', function(){
	return view('googleb1dd29d83578768f');
});

Route::get('contact/import/google', ['as'=>'google.import', 'uses'=>'ContactsController@importGoogleContact']);


/* ---- END API ---- */

