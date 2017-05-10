@extends('layouts.loggedin_master')

@section('additional_css')

<link rel="stylesheet" href="/css/myProfile.css">

<style>

.hide {
	display: none;
}
.x {
	margin-top: -9%;
	float: right;
	color: white;
}

</style>

@stop

@section('loggedin_content')

<div class="userLeftControllPanel-arrow"></div>

<div class="userLeftControllPanel">
	<div class="x">x</div>
	<div class="userLeftControllPanel-sub-sections firstControlPanel-sub-section sub-section-text">My Events</div>
	<div class="userLeftControllPanel-sub-sections sub-section-text">Create Event</div>
	<div class="userLeftControllPanel-sub-sections sub-section-text"> Contacts</div>
	<div class="userLeftControllPanel-sub-sections sub-section-text">Edit Profile</div>
	<div class="userLeftControllPanel-sub-sections sub-section-text"><a href="logout">Logout</a></div>
	
	<div class="settings"></div>
</div>

<div id="calendarContainer">

</div>

<script src="/js/jquery/10.8.3/jquery.min.js" type="text/javascript"></script>
<script src="/js/jquery/jquery-3.2.0.min.js" type="text/javascript"></script>

<script>
	$(document).ready(function(){

		$('.x').click(function(){
			clicked = "yes";
			$('.userLeftControllPanel-sub-sections').addClass('hide');
			$('.settings').addClass('hide');

			$('.userLeftControllPanel').animate({
				"width":"1px",
				"padding":"0",
				"margin":"0"
			}, 300);

			setTimeout(function(){
				$('.userLeftControllPanel').fadeOut(100);
			}, 300);


			setTimeout(function(){
				$('.userLeftControllPanel-arrow').fadeIn(100);
				$('.userLeftControllPanel-arrow').animate({
					"width":"10px"
				}, 400);
			}, 300);

		});

		$('.userLeftControllPanel-arrow').click(function(){
			$('.userLeftControllPanel-arrow').animate({
				"width":"1px"
			}, 400);

			setTimeout(function(){
				$('.userLeftControllPanel-arrow').fadeOut(10);
			}, 404);

			setTimeout(function(){

				$('.userLeftControllPanel').fadeIn(100);

				$('.userLeftControllPanel').animate({
					"width":"20%",
					"padding":"2.5%"
				}, 300);

				setTimeout(function(){
					$('.userLeftControllPanel-sub-sections').fadeIn(200).removeClass('hide');
					$('.settings').fadeIn(200).removeClass('hide');
				}, 310);
			}, 410);
		});
	});
</script>

@stop


