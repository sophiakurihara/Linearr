@extends('layouts.loggedin_master')

@section('additional_css')

<link href="/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="/css/myProfile.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="/js/jquery/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


@stop

@section('loggedin_content')
	

	<div class="settings"></div>
</div>
	
	<div id="calendarContainer">
		<div id="calendar"></div>
	</div>	
	
	<!-- The Modal -->

<!-- 	<div id="myModal" class="modal">
		< Modal content
		<div class="modal-content">
			<span class="close">&times;</span>
			<p>Event Title<br>
			Event Date<br>
			Event Time <br>
			Number of People Attending <br>
			Invite Contacts
			</p>
		</div>
	</div>  -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="/js/jquery/10.8.3/jquery.min.js" type="text/javascript"></script>
	<script src="/js/jquery/jquery-3.2.0.min.js" type="text/javascript"></script>
	
	<form method="POST" action="{{ action('EventsController@createEvent') }}">
	{!! csrf_field()!!}
	<div id="myEventsRight">
		<div class="createEventContainer">
			<label for="title">Title:</label><input type="text" name="title" id="title"  autocomplete="off">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" value="{{ $errors->has('description') ? '' : old('description') }}" autocomplete="off">
                <label>Date:</label>
                <input type="hidden" id="datepicker">
                <label for="sent_to">Invite Contacts:</label>
                <input type="text" name="sent_to" id="sent_to" value="{{ $errors->has('sent_to') ? '' : old('sent_to') }}" autocomplete="off">
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