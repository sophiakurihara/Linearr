<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Hash;

class UsersController extends Controller
{

    public function show($id) {
        $profile = \Auth::id();
    }
}
