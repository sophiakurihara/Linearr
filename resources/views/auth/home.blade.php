@extends('layouts.master')

@section('additional_css')

<link rel="stylesheet" href="/css/home.css">

@stop

@section('content')

<div class="banner-image">
    <img src="/img/giphy.gif">
    <div class="banner-right">
        <div class="banner-right-title">
            <h1>Register</h1>
        </div>
        <form>
            <label for="firstname">First Name:</label><input type="text" id="firstname">
            <label for="lastname">Last Name:</label><input type="text" id="lastname">
            <label for="email">E-Mail:</label><input type="text" id="email">
            <label for="phone">Phone:</label><input type="text" id="phone">
        </form>
    </div>
</div>


@stop


