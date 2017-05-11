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
	
@stop


