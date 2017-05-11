@extends('layouts.loggedin_master')

@section('additional_css')

<link rel="stylesheet" href="/css/myProfile.css">
<link href="/css/jquery-ui.css" rel="stylesheet">

@stop

@section('loggedin_content')

<div class="userLeftControllPanel-arrow"></div>

<div class="userLeftControllPanel">
	<div class="x">x</div>
	<div id="myEvents" class="userLeftControllPanel-sub-sections firstControlPanel-sub-section sub-section-text">My Events</div>
	<div id="createEvent" class="userLeftControllPanel-sub-sections sub-section-text"><a href="create-event">Create Event</a></div>
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
					}, 200);
				}, 300);

				setTimeout(function(){
					$('#calendarContainer').animate({
						"width":"99.4%"
					}, 400);
				}, 210);
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
					//$('.userLeftControllPanel-arrow').css("background-color", "#114b5f");
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

	<script>
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
	</script>
	<script>
		// on .click of myEvents subsection content in users panel 
		$(document).ready(function(){
			$("#myEvents").click(function(){
		    	$("#calendarContainer").animate({width: "54%"});
				$("#myEventsRight").fadeIn(.1);
				$("#myEventsRight").animate({width: "26%"});
			});
		});
	</script>
	<script>
		// on .click of Create Event subsection content in users panel 


	</script>
	<script>
		// on .click of contacts subsection content in users panel 


	</script>
	<script>
		// on .click of edit profile subsection content in users panel 


	</script>
	<script>
		$(document).ready(function() {

			// Speed up calls to hasOwnProperty
			var hasOwnProperty = Object.prototype.hasOwnProperty;

			function isEmpty(obj) {

				// null and undefined are "empty"
				if (obj == null) return true;

				// Assume if it has a length property with a non-zero value
				// that that property is correct.
				if (obj.length > 0)    return false;
				if (obj.length === 0)  return true;

				// If it isn't an object at this point
				// it is empty, but it can't be anything *but* empty
				// Is it empty?  Depends on your application.
				if (typeof obj !== "object") return true;

				// Otherwise, does it have any properties of its own?
				// Note that this doesn't handle
				// toString and valueOf enumeration bugs in IE < 9
				for (var key in obj) {
					if (hasOwnProperty.call(obj, key)) return false;
				}

				return true;
			}

			$.ajax({
				url: '/get-calendar-events',
				method: "GET",
				dataType: "JSON",
				success: function(events) {
						var array = [];
						for(var i = 0; i < events.length; i++) {
							array.push({
								id: events[i].id,
								title: events[i].title,
								start: events[i].date_of_event
							});
						}

						if(!isEmpty(events[0].title)) {
							$('#calendar').fullCalendar({
								defaultDate: '2017-05-12',
								editable: true,
								eventLimit: true, // allow "more" link when too many events
								events: array
							});
						} else {
							$('#calendar').fullCalendar({
								defaultDate: '2017-05-12',
								editable: true,
								eventLimit: true // allow "more" link when too many events
							});
						}









					// run the calendar - with populated data
				}, error: function(events) {
					// run the calendar with no data
					console.log("Error: " + events);
				}
			});
		});
	</script>

@stop


