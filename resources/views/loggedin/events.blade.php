@extends('layouts.loggedin_master')

@section('additional_css')

<link rel="stylesheet" href="/css/myProfile.css">

@stop

@section('loggedin_content')
	
	<!-- The Modal -->
	<div id="myModal" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
			<p>Event Title<br>
			Event Date<br>
			Event Time <br>
			Number of People Attending <br>
			Invite Contacts
			</p>
		</div>
	</div>

	<form method="POST" action="{{ action('EventsController@createEvent') }}">
	{!! csrf_field()!!}
	<div id="myEventsRight">
		<div class="createEventContainer">
			<label for="title">Title:</label><input type="text" name="title" id="title"  autocomplete="off">
                <label for="description">Description:</label><input type="text" name="description" id="description" value="{{ $errors->has('description') ? '' : old('description') }}" autocomplete="off">
                <label for="date_of_event">Date:</label><input type="text" name="date_of_event" id="date_of_event" value="{{ $errors->has('date_of_event') ? '' : old('date_of_event') }}" autocomplete="off">
                <label for="sent_to">Invite Contacts:</label><input type="text" name="sent_to" id="sent_to" value="{{ $errors->has('sent_to') ? '' : old('sent_to') }}" autocomplete="off">
		    	{{ method_field('POST') }}
   			</div>
		    <button type="submit" class="create-event-button">Create Event</button>
		</div>
    </form>

@stop

@section('js')

	<script>
		// on .click of myEvents subsection content in users panel 
		$(document).ready(function(){
			setTimeout(function(){
				$("#calendarContainer").animate({
					width: "54%"
				});
				setTimeout(function(){
					$("#myEventsRight").fadeIn(1400);
				}, 300);
			}, 500);
		});
	</script>

@stop