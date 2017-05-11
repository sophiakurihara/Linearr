@extends('layouts.loggedin_master')

@section('additional_css')

<link rel="stylesheet" href="/css/myProfile.css">

@stop

@section('loggedin_content')

<div class="userLeftControllPanel-arrow"></div>

<div class="userLeftControllPanel">
	<div class="x">x</div>
	<div id="myEvents" class="userLeftControllPanel-sub-sections firstControlPanel-sub-section sub-section-text">My Events</div>
	<div id="createEvent" class="userLeftControllPanel-sub-sections sub-section-text">Create Event</div>
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

	<script>
		$(document).ready(function(){
			for(let i = 0; i <= 31; i++)
			{
				$(".myBtn" + i).click(function(){
					console.log("you clicked" + i);
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


