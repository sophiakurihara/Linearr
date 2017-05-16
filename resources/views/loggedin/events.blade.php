@extends('layouts.loggedin_master')

@section('additional_css')

<link href="/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="/css/myProfile.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<link rel="stylesheet" href="/css/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



@stop


@section('loggedin_content')

	<!-- <div id="calendarContainer">
		<div id="calendar"></div>
	</div>	 -->
	<!-- The Modal -->
	<!-- <div id="myModal" class="modal"> -->
		<!-- Modal content -->
	<!-- 	<div class="modal-content">
			<span class="close">&times;</span>

			<form method="POST" action="{{ action('EventsController@createEvent') }}">
				{!! csrf_field()!!}
				<div class="create-event-input-container">
					<div class="modal-content-div">
						<input for="title" placeholder= "Title" type="text" name="title" class="modal-content-title-input"  autocomplete="off">
					</div>
					<div class="modal-content-div">
			            <textarea rows="3" cols="40" type="text" for="description" placeholder="Description" name="description" id="description" value="{{ $errors->has('description') ? '' : old('description') }}" autocomplete="off"></textarea>
					</div>
					
					<div class="modal-content-div">
					
					
						<p>Date: <input type="text" id="datepicker"></p>
			           <!  <input type="text" for="date_of_event" placeholder="Date" id="datepicker" value="{{ $errors->has('date_of_event') ? '' : old('date_of_event') }}"> -->
			<!--         </div>
			        <div class="modal-content-div">         
			            <input for="sent_to" placeholder="Contacts" type="text" name="sent_to" id="sent_to" value="{{ $errors->has('sent_to') ? '' : old('sent_to') }}" autocomplete="off">
					</div>
				</div>
				{{ method_field('POST') }}
				<button type="submit" class="create-event-button">Create Event</button>
		    </form>	
		</div>
	</div>  -->
	<!-- <script>
		$('#datepicker').click(function(){
			console.log('datepicker clicked');
		});

		$(function(){
			$("#datepicker").datepicker();
		});
	</script> --> 
@stop
