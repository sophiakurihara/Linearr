<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
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

    public function displayLogin() {
        return view('login');
    }
}
