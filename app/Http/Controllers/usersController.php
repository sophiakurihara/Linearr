<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use DB;
use Session;
use Auth;
use Hash;

class UsersController extends Controller
{
    public function registerUser(Request $request) {
        // check if the user is logged in and if they are, redirect them to the homepage
        if(Auth::check()) {
            return redirect()->action('UsersController@displayHomepage');
        }

        $rules = [
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'email' => 'required|max:50',
            'phone' => 'required|max:13',
            'password' => 'required|max:16'
        ];

        $this->validate($request, $rules);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->action('UsersController@displayLogin');

    }

    public function loginUser(Request $request) {

        $rules = [
            'email' => 'required|max:30|email',
            'password' => 'required|max:16'
        ];

        $this->validate($request, $rules);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]) === true) {
            $request->session()->put('LOGGED_IN_USER', $request->username);
            $request->session()->put('AUTH', true);
            
            // this will send an SMS containing the email of logged in user;
            // $twilio = new \App\Twilio();
            // $twilio->sendText('+12107748500', $request->email);

            return redirect()->action('UsersController@displayHomepage');
        } else {
            $request->session()->flash('incorrect_login', 'Invalid credentials - Try again');
        }
        return redirect()->action('UsersController@displayLogin');

    }

    public function displayLogin() {
        // check if the user is logged in and if they are, redirect them to the homepage
        if(Auth::check()) {
            return redirect()->action('UsersController@displayHomepage');
        }
        return view('login');
    }

    public function displayRegister() {
        // check if the user is logged in and if they are, redirect them to the homepage
        if(Auth::check()) {
            return redirect()->action('UsersController@displayHomepage');
        }
        return view('register');
    }

    public function displayHomepage() {
        if(Auth::check()) {
            return view('loggedin.myProfile');
        }
        return view('home');
    }

    public function logout() {
        Auth::logout();
        Session::flush();
        return redirect()->action('UsersController@displayHomepage');
    }

    public function settings() {
        if(Auth::check()) {
            return view('loggedin.settings');
        }
        return view('settings');
    }

    public function editAccount(Request $request)
    {
        // ******* UPDATE FIRST NAME *******
        if(!Auth::check())
        {
            return redirect()->action('UsersController@displayHomepage');
        }

        if(isset($request->firstNameButton))
        { // check if the request isset with first namebutton
            //Establish the rules (parameters) for the inputs 
            $rules = array(
                'first_name' => 'required|max:40'
            );
            $this->validate($request, $rules); // this checks if the rules are good to go ... if they are then they will proceed to the next step

            // defining variable of user as the user with the id of the current logged in user that is editing the profile firstname 
            $user = User::find(Auth::id());

            //calling the users first name and requesting first name update from DB
            $user->first_name = $request->first_name;

            //saving the users updates to the database. 
            $user->save();

            //redirect to the settings page..
            return redirect()->action('UsersController@settings');
        }
    
        // ******* UPDATE LAST NAME *******
        // if the user is logged in and verified.
      
        //if the button editlastname isset establish rules 
        if(isset($request->lastNameButton))
        {
            $rules = array(
                'last_name' => 'required|max:40'
            );
            //This is going to check if the rules are good. 
            $this->validate($request, $rules);

            // define a variable of user with the id of the current user so I can reference and update their information in the database 
            $user = User::find(Auth::id());

            //requesting that the content is updated in the backend DB 
            $user->last_name = $request->last_name;

            $user->save();

            //redirect to the settings page 
            return redirect()->action('UsersController@settings');
        }

        // ****** UPDATE PHONE NUMBER ******
        // if the phonenumberButton is clicked then esatblish rules 
        if(isset($request->phoneNumberButton))
        {
            $rules = array(
                'phone' => 'required|max:12'
            );

            // Validate the rules 
            $this->validate($request, $rules);

            //define a variable of user with the user id to be referenced. 
            // finding the user via their Auth ID 
            $user = User::find(Auth::id());

            // what column we are going to request to update
            $user->phone = $request->phone;

            //saving the info in the database
            $user->save();

            return redirect()->action('UsersController@settings');
        }
    }
}