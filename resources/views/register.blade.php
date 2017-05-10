@extends('layouts.master')

@section('additional_css')

<link rel="stylesheet" href="/css/home.css">

@stop

@section('content')

<?php $errors->has('first_name') ? $redBorder1 = 'style="color: darkred; font-weight: bold;"' : $redBorder1 = false ?>
<?php $errors->has('last_name') ? $redBorder2 = 'style="color: darkred; font-weight: bold;"' : $redBorder2 = false ?>
<?php $errors->has('email') ? $redBorder3 = 'style="color: darkred; font-weight: bold;"' : $redBorder3 = false ?>
<?php $errors->has('phone') ? $redBorder4 = 'style="color: darkred; font-weight: bold;"' : $redBorder4 = false ?>
<?php $errors->has('password') ? $redBorder5 = 'style="color: darkred; font-weight: bold;"' : $redBorder5 = false ?>

<div class="banner-image">
    <img src="/img/giphy.gif">
<<<<<<< HEAD:resources/views/auth/home.blade.php
    <div class="loginRegisterContainer">
        <div class="banner-buttons">
            <a href="login" id="login">Login</a>
            <a href="register" id="register">Register</a>
        </div>
        <div class="banner-right-register hide">
            <div class="banner-right-title">
                <h1>Register</h1>
            </div>
            <form action=" {{ action('UsersController@registerUser') }}" method="POST">

        <form action=" {{ action('Auth\AuthController@postRegister') }}" method="POST">
=======

    <div class="banner-right-register">
        <div class="banner-right-title">
            <h1>Register</h1>
        </div>
        <form action="{{ action('UsersController@registerUser') }}" method="POST">
>>>>>>> 1f83c42f886c57311d043f2f239efcfd457b0625:resources/views/register.blade.php

            {{ csrf_field() }}

            <label for="first_name" <?php echo $redBorder1; ?>>First Name:</label><input type="text" name="first_name" id="first_name" placeholder="{{ $errors->has('first_name') ? 'Please enter your first name' : 'First name' }}" value="{{ $errors->has('first_name') ? '' : old('first_name') }}">
            <label for="last_name" <?php echo $redBorder2; ?>>Last Name:</label><input type="text" name="last_name" id="last_name" placeholder="{{ $errors->has('last_name') ? 'Please enter your last name' : 'Last name' }}" value="{{ $errors->has('last_name') ? '' : old('last_name') }}">
            <label for="email" <?php echo $redBorder3; ?>>E-Mail:</label><input type="text" name="email" id="email" placeholder="{{ $errors->has('email') ? 'Please enter your email address' : 'Email' }}" value="{{ $errors->has('email') ? '' : old('email') }}">
            <label for="phone" <?php echo $redBorder4; ?>>Phone:</label><input type="text" name="phone" id="phone" placeholder="{{ $errors->has('phone') ? 'Please enter your phone number' : 'Phone' }}" value="{{ $errors->has('phone') ? '' : old('phone') }}">
            <label for="password" <?php echo $redBorder5; ?>>Password:</label><input type="password" name="password" id="password" placeholder="{{ $errors->has('password') ? 'Please enter your password' : 'Password' }}">
<<<<<<< HEAD:resources/views/auth/home.blade.php
            <label for="password_confirmation" <?php echo $redBorder6; ?>>Confirm Password:</label><input type="password" name="password_confirmation" id="password_confirmation" placeholder="{{ $errors->has('password_confirmation') ? 'Please confirm your password' : 'Confirm Password' }}">
>>>>>>> aea3ddaffeb8bacef4042d2f6d3821636f9559bd

                {{ csrf_field() }}
                <label for="firstname" <?php echo $redBorder1; ?>>First Name:</label><input type="text" name="firstname" id="firstname" placeholder="{{ $errors->has('firstname') ? 'Please enter your first name' : 'First name' }}" value="{{ $errors->has('firstname') ? '' : old('firstname') }}">
                <label for="lastname" <?php echo $redBorder2; ?>>Last Name:</label><input type="text" name="lastname" id="lastname" placeholder="{{ $errors->has('lastname') ? 'Please enter your last name' : 'Last name' }}" value="{{ $errors->has('lastname') ? '' : old('lastname') }}">
                <label for="email" <?php echo $redBorder3; ?>>E-Mail:</label><input type="text" name="email" id="email" placeholder="{{ $errors->has('email') ? 'Please enter your email address' : 'Email' }}" value="{{ $errors->has('email') ? '' : old('email') }}">
                <label for="phone" <?php echo $redBorder4; ?>>Phone:</label><input type="text" name="phone" id="phone" placeholder="{{ $errors->has('phone') ? 'Please enter your phone number' : 'Phone' }}" value="{{ $errors->has('phone') ? '' : old('phone') }}">
                <label for="password" <?php echo $redBorder5; ?>>Password:</label><input type="password" name="password" id="password" placeholder="{{ $errors->has('password') ? 'Please enter your password' : 'Password' }}">
                {!! method_field('POST') !!}

                <button type="submit" class="login-button">Register</button>

            </form>
        </div>
    </div>
=======

            {{ method_field('POST') }}

            <button type="submit" class="login-button">Register</button>
>>>>>>> 1f83c42f886c57311d043f2f239efcfd457b0625:resources/views/register.blade.php

        </form>
    </div>

</div>

<?php $errors->has('first_name') ? $clicked = "true" : $clicked = "false" ?>
<?php $errors->has('last_name') ? $clicked = "true" : $clicked = "false" ?>
<?php $errors->has('email') ? $clicked = "true" : $clicked = "false" ?>
<?php $errors->has('phone') ? $clicked = "true" : $clicked = "false" ?>
<?php $errors->has('password') ? $clicked = "true" : $clicked = "false" ?>

<script src="/js/jquery/10.8.3/jquery.min.js" type="text/javascript"></script>
<script src="/js/jquery/jquery-3.2.0.min.js" type="text/javascript"></script>

<script>

$(document).ready(function(){
    $(".banner-right-register").fadeIn(400);
});

</script>


@stop