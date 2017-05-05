@extends('layouts.master')
@section('additional_css')
<link rel="stylesheet" href="/css/profile.css">
@stop
@section('content')
	<div id="sideNavBar"><h1>This is some text for a test</h1></div>
	<div id="middleContainer">	
		<div class="aboutPicture"></div>
		<h1>This is the user's home page</h1>
		<h3>Calendar would populate here</h3>
		<h3>Add side nav-bar</h3>
		<h3>Add user info on right</h3>
	</div>
	<div id="sideProfile">
		<div id="profilePicture"></div>
		<div class="profileInfo"></div>
	</div>
@stop