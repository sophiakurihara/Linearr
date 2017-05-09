<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Auth;
use Hash;

class UsersController extends Controller
{
    public function registerUser(Request $request) {

        $user = new User();

        $rules = [
            'firstname' => 'required|max:30',
            'lastname' => 'required|max:30',
            'email' => 'required|max:50',
            'phone' => 'required|max:13',
            'password' => 'required|max:16'
        ];

        $this->validate($request, $rules);

        $user->first_name = $request->firstname;
        $user->last_name = $request->lastname;
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
            return redirect()->action('UsersController@displayHomepage');
        } else {
            $request->session()->flash('incorrect_login', 'Invalid credentials - Try again');
        }
        return redirect()->action('UsersController@displayLogin');
    }

    public function displayLogin() {
        return view('login');
    }

    public function displayRegister() {
        return view('register');
    }

    public function displayHomepage() {

    }
}
