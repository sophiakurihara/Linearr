@extends('layouts.loggedin_master')

@section('additional_css')

<link rel="stylesheet" href="/css/myProfile.css">

@stop

@section('loggedin_content')

<div class="userLeftControllPanel-arrow"></div>

<div class="userLeftControllPanel">
	<div class="x">x</div>
	<div id="myEvents" class="userLeftControllPanel-sub-sections firstControlPanel-sub-section sub-section-text">My Events</div>
	<div class="userLeftControllPanel-sub-sections sub-section-text" id="createEvent"><a href="create-event">Create Event</a></div>
	<div id="contacts" class="userLeftControllPanel-sub-sections sub-section-text"> Contacts</div>
	<div id="editProfile" class="userLeftControllPanel-sub-sections sub-section-text">Edit Profile</div>
	<div class="userLeftControllPanel-sub-sections sub-section-text"><a href="logout">Logout</a></div>
	
	<div class="settings"></div>
</div>

	<div id="calendarContainer">
		<div id="calendar"></div>
	</div>	
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
	
	<script src="/js/jquery/10.8.3/jquery.min.js" type="text/javascript"></script>
	<script src="/js/jquery/jquery-3.2.0.min.js" type="text/javascript"></script>

	<script>
		$(document).ready(function(){

			$('.x').click(function(){
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

				setTimeout(function(){
					$('#calendarContainer').animate({
						"width":"99.4%"
					}, 400);
				}, 310);
			});

			$('.userLeftControllPanel-arrow').click(function(){
				$('#calendarContainer').animate({
					"width":"80%"
				}, 400);

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

<!-- 	<script>
		$(document).ready(function(){
			var clicked
			for(let i = 0; i <= 31; i++)
			{
				$(".myBtn" + i).click(function(){
					$("#myModal").css("display", "block");
				});
				$(".close").click(function(){
					$("#myModal").css("display", "none");
				});
			}
		});
	</script> -->
	<script>
		// on .click of myEvents subsection content in users panel 
		$(document).ready(function(){
	    	$("#calendarContainer").animate({width: "54%"});
			$("#myEventsRight").fadeIn(.1);
			$("#myEventsRight").animate({width: "26%"});
			});
	</script>
<!-- 	<script>
		// on .click of myEvents subsection content in users panel 
		$(document).ready(function(){
			$("#createEvent").click(function(){
		    	$("#calendarContainer").animate({width: "54%"});
				$("#myEventsRight").fadeIn(.1);
				$("#myEventsRight").animate({width: "26%"});
			});
		});
	</script> -->
		<!-- // on .click of Create Event subsection content in users panel  -->


	
	<script>
		// on .click of contacts subsection content in users panel 


	</script>
	<script>
		// on .click of edit profile subsection content in users panel 


	</script>
	<script>
		$(document).ready(function() {
			$('#calendar').fullCalendar({
				defaultDate: '2017-05-12',
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				events: [
					{
						title: 'All Day Event',
						start: '2017-05-01'
					},
					{
						title: 'Long Event',
						start: '2017-05-07',
						end: '2017-05-10'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2017-05-09T16:00:00'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: '2017-05-16T16:00:00'
					},
					{
						title: 'Conference',
						start: '2017-05-11',
						end: '2017-05-13'
					},
					{
						title: 'Meeting',
						start: '2017-05-12T10:30:00',
						end: '2017-05-12T12:30:00'
					},
					{
						title: 'Lunch',
						start: '2017-05-12T12:00:00'
					},
					{
						title: 'Meeting',
						start: '2017-05-12T14:30:00'
					},
					{
						title: 'Happy Hour',
						start: '2017-05-12T17:30:00'
					},
					{
						title: 'Dinner',
						start: '2017-05-12T20:00:00'
					},
					{
						title: 'Birthday Party',
						start: '2017-05-13T07:00:00'
					},
					{
						title: 'Click for Google',
						url: 'http://google.com/',
						start: '2017-05-28'
					}
				]
			});
		});
	</script>

@stop


