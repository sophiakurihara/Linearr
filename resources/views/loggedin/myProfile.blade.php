@extends('layouts.loggedin_master')

@section('additional_css')

<link rel="stylesheet" href="/css/myProfile.css">
<link href="/css/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
	<script src="https://unpkg.com/flatpickr"></script>

    
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
			            <input type="text" for="date_of_event" name="date_of_event" placeholder="Date" class="datepicker" value="{{ $errors->has('date_of_event') ? '' : old('date_of_event') }}">
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
	<script>

	
	// new Flatpickr(Element.dateTimePick, defaultDate);

	$(document).ready(function(){
		$("#datepicker").click(function(){
			console.log('datePicker ID Clicked ');
		document.getElementsById("datepicker").flatpickr({
	    
	    altFormat: "l j M Y",
	    enableTime: true,
	    altInputClass: "form-control",
	    allowInput: true,
	    dateFormat: "Y-m-d h:i K",
	    weekNumbers: true,
	    minDate: "today",
	    enable: [
	        {
	            from: "today",
	            to: new Date().fp_incr(2)
	        },
	        function(date) {
	            return date.getDate()%2 > 0;
	        }
	    ],
	    maxDate: new Date().fp_incr(60)
		})
	});
	});
	</script>

@stop


