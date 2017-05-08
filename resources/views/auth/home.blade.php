@extends('layouts.master')

@section('additional_css')

<link rel="stylesheet" href="/css/home.css">

@stop

@section('content')

<?php $errors->has('firstname') ? $redBorder1 = 'style="color: darkred; font-weight: bold;"' : $redBorder1 = false ?>
<?php $errors->has('lastname') ? $redBorder2 = 'style="color: darkred; font-weight: bold;"' : $redBorder2 = false ?>
<?php $errors->has('email') ? $redBorder3 = 'style="color: darkred; font-weight: bold;"' : $redBorder3 = false ?>
<?php $errors->has('phone') ? $redBorder4 = 'style="color: darkred; font-weight: bold;"' : $redBorder4 = false ?>
<?php $errors->has('password') ? $redBorder5 = 'style="color: darkred; font-weight: bold;"' : $redBorder5 = false ?>

<div class="banner-image">
    <img src="/img/giphy.gif">

    <div class="banner-buttons">
        <a href="login" id="login">Login</a>
        <a href="register" id="register">Register</a>
    </div>

    <div class="banner-right-register hide">
        <div class="banner-right-title">
            <h1>Register</h1>
        </div>
        <form action=" {{ action('UsersController@registerUser') }}" method="POST">

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

<?php $errors->has('firstname') ? $clicked = "true" : $clicked = "false" ?>
<?php $errors->has('lastname') ? $clicked = "true" : $clicked = "false" ?>
<?php $errors->has('email') ? $clicked = "true" : $clicked = "false" ?>
<?php $errors->has('phone') ? $clicked = "true" : $clicked = "false" ?>
<?php $errors->has('password') ? $clicked = "true" : $clicked = "false" ?>

<script src="/js/jquery/10.8.3/jquery.min.js" type="text/javascript"></script>
<script src="/js/jquery/jquery-3.2.0.min.js" type="text/javascript"></script>

<script>

$(document).ready(function(){
    var clicked = '<?php echo $clicked; ?>';
    console.log(clicked);
    if(clicked === "true") {
        setTimeout(function(){
            $(".banner-buttons").addClass("hide");
            $(".banner-right-register").removeClass("hide");
            $(".banner-right-register").fadeIn(400);
        }, 200);
    }

    $("#login").click(function(e){
        e.preventDefault();
        $(".banner-buttons").fadeOut(400);
        setTimeout(function(){
            $(".banner-right-login").removeClass("hide");
            $(".banner-right-login").fadeIn(400);
        }, 440);
    });
    $("#register").click(function(e){
        e.preventDefault();        
        $(".banner-buttons").fadeOut(400);
        setTimeout(function(){
            $(".banner-right-register").removeClass("hide");
            $(".banner-right-register").fadeIn(400);
        }, 440);
    });
});

</script>


@stop


