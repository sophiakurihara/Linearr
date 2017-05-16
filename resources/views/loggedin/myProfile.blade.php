@extends('layouts.loggedin_master')

@section('additional_css')

<link rel="stylesheet" href="/css/myProfile.css">
<link href="/css/jquery-ui.css" rel="stylesheet">

@stop

@section('loggedin_content')

	<div id="calendarContainer">
		<div id="calendar"></div>
	</div>
		<!-- The Modal -->

	<div id="myModal" class="modal">
		 <!-- Modal content -->
		<div class="modal-content">
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
			            <p>Date: <input id="datepicker"></p>
			        </div>
			        <div class="modal-content-div">         
			            <input for="sent_to" placeholder="Contacts" type="text" name="sent_to" id="sent_to" value="{{ $errors->has('sent_to') ? '' : old('sent_to') }}" autocomplete="off">
					</div>
				</div>
				{{ method_field('POST') }}
				<button type="submit" class="create-event-button">Create Event</button>
		    </form>	
		</div>
	</div> 
	<script>
	$(document).ready(function(){


		$('#datepicker').click(function(){
			console.log('datepicker clicked');
		});

		$(function(){
			$("#datepicker").datepicker();
		});
	});
	</script>
	<div id="myEventsRight">
		<div class="x-right"><b>x</b></div>
		<div class="userRightControllPanel">
			
			<div class="eventContainer">
				<div class="userRightControllPanel-sub-sections myEventsTitle"><h4><b>Alex's 6th Birthday!</b></h4></div>
				<div class="userRightControllPanel-sub-sections myEventsDate"><b>Date:</b></b> August 2017</div>
				<div class="userRightControllPanel-sub-sections myEventsTime"><b>Time:</b> 4:00pm - 8:00pm</div>
				<div class="userRightControllPanel-sub-sections myEventsDescription"><b>Description:</b> 
				<br>
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
				</div>
			</div>
		</div>
	</div>

@stop


