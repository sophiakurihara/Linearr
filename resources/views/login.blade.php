@extends('layouts.master')

@section('additional_css')

<link rel="stylesheet" href="/css/home.css">

@stop

@section('content')

<div class="banner-image">
    <img src="/img/giphy.gif">

    <div class="banner-buttons">
        <a href="#login" id="login">Login</a>
        <a href="#register" id="register">Register</a>
    </div>

    <div class="banner-right-register hide">
        <div class="banner-right-title">
            <h1>Register</h1>
        </div>
        <form action=" {{ action('UsersController@registerUser') }}" method="POST">
            
            {{ csrf_field() }}
            <label for="firstname">First Name:</label><input type="text" name="first_name" id="firstname">
            <label for="lastname">Last Name:</label><input type="text" name="last_name" id="lastname">
            <label for="email">E-Mail:</label><input type="text" name="email" id="email">
            <label for="phone">Phone:</label><input type="text" name="phone" id="phone">
            
            <button type="submit" class="login-button">Register</button>

        </form>
    </div>

    <div class="banner-right-login hide">
        <div class="banner-right-title">
            <h1>Login</h1>
        </div>
        <form>
            <label for="email">Email:</label><input type="text" id="email">
            <label for="password">Password:</label><input type="text" id="password">
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>

</div>

<script src="/js/jquery/10.8.3/jquery.min.js" type="text/javascript"></script>
<script src="/js/jquery/jquery-3.2.0.min.js" type="text/javascript"></script>

<script>

$(document).ready(function(){
    $("#login").click(function(){
        $(".banner-buttons").fadeOut(400);
        setTimeout(function(){
            $(".banner-right-login").removeClass("hide");
            $(".banner-right-login").fadeIn(400);
        }, 440);
    });
    $("#register").click(function(){
        $(".banner-buttons").fadeOut(400);
        setTimeout(function(){
            $(".banner-right-register").removeClass("hide");
            $(".banner-right-register").fadeIn(400);
        }, 440);
    });
});

</script>


@stop