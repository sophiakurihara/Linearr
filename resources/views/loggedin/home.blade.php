@extends('layouts.master')

@section('additional_css')

<link rel="stylesheet" href="/css/home.css">

@stop

@section('content')

<div class="banner-image">
    <img src="/img/giphy.gif">

    <div class="loginRegisterContainer">
        <div class="banner-buttons">
            <a href="logout" id="login">Logout</a>
        </div>
    </div>
@stop


