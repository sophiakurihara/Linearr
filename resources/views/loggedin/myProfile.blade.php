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
		<div class="month"> 
			<ul>
			  <li class="prev">&#10094;</li>
			  <li class="next">&#10095;</li>
			  <li>
			    August<br>
			    <span style="font-size:18px">2016</span>
			  </li>
			</ul>
		</div>

		<ul class="weekdays">
		  <li>Mo</li>
		  <li>Tu</li>
		  <li>We</li>
		  <li>Th</li>
		  <li>Fr</li>
		  <li>Sa</li>
		  <li>Su</li>
		</ul>

		<ul class="days"> 
		  <li class="myBtn1">1</li>
		  <li class="myBtn2">2</li>
		  <li class="myBtn3">3</li>
		  <li class="myBtn4">4</li>
		  <li class="myBtn5">5</li>
		  <li class="myBtn6">6</li>
		  <li class="myBtn7">7</li>
		  <li class="myBtn8">8</li>
		  <li class="myBtn9">9</li>
		  <li class="myBtn10"><span class="active">10</span></li>
		  <li class="myBtn11">11</li>
		  <li class="myBtn12">12</li>
		  <li class="myBtn13">13</li>
		  <li class="myBtn14">14</li>
		  <li class="myBtn15">15</li>
		  <li class="myBtn16">16</li>
		  <li class="myBtn17">17</li>
		  <li class="myBtn18">18</li>
		  <li class="myBtn19">19</li>
		  <li class="myBtn20">20</li>
		  <li class="myBtn21">21</li>
		  <li class="myBtn22">22</li>
		  <li class="myBtn23">23</li>
		  <li class="myBtn24">24</li>
		  <li class="myBtn25">25</li>
		  <li class="myBtn26">26</li>
		  <li class="myBtn27">27</li>
		  <li class="myBtn28">28</li>
		  <li class="myBtn29">29</li>
		  <li class="myBtn30">30</li>
		  <li class="myBtn31">31</li>
		</ul>
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
	

@stop


