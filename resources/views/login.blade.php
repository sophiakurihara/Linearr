@extends('layouts.master')

@section('additional_css')

<link rel="stylesheet" href="/css/home.css">

@stop

@section('content')

<div class="banner-image">
    <img src="/img/giphy.gif">

    <div class="banner-right-login">
        <div class="banner-right-title">
            <h1 class="login">Login</h1>
                @if(session()->has('incorrect_login'))
                    <div class="invalid-credentials">
                        {{ session()->get('incorrect_login') }}
                    </div>
                @endif
        </div>
        <form action="{{ action('UsersController@loginUser') }}" method="POST">

            {{ csrf_field() }}

            <div class="form-inputs">
                <label for="email">Email:</label><input type="text" placeholder="{{ $errors->has('email') ? $errors->first('email') : '' }}" value="{{ $errors->has('email') ? '' : old('email') }}"name="email" id="email" autocomplete="off">
                <label for="password">Password:</label><input type="password" placeholder="{{ $errors->has('password') ? $errors->first('password') : '' }}" name="password" id="password" autocomplete="off">
            </div>

            <button type="submit" class="login-button">Login</button>
            {{ method_field('POST') }}

        </form>
    </div>

</div>

<script src="/js/jquery/10.8.3/jquery.min.js" type="text/javascript"></script>
<script src="/js/jquery/jquery-3.2.0.min.js" type="text/javascript"></script>

<script>

$(document).ready(function(){
    $(".banner-right-login").fadeIn(800);
});

</script>


@stop