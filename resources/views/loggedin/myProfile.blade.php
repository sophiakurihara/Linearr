@extends('layouts.loggedin_master')

@section('additional_css')

<link rel="stylesheet" href="/css/myProfile.css">

@stop

@section('loggedin_content')
<div class="userLeftControllPanel">
		<div class="userLeftControllPanel-sub-sections firstControlPanel-sub-section sub-section-text sub-section-text:hover"><a href="myEvents">My Events</a></div>
		<div class="userLeftControllPanel-sub-sections sub-section-text sub-section-text:hover"><a href="createEvent">Create Events</a></div>
		<div class="userLeftControllPanel-sub-sections sub-section-text sub-section-text:hover"> <a href="contacts">Contacts</a></div>
		<div class="userLeftControllPanel-sub-sections sub-section-text sub-section-text:hover"><a href="editProfile">Edit Profile</a></div>
		<div class="userLeftControllPanel-sub-sections sub-section-text sub-section-text:hover"><a href="logout">Logout</a></div>
		
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
	<script src="/js/jquery/10.8.3/jquery.min.js" type="text/javascript"></script>
	<script src="/js/jquery/jquery-3.2.0.min.js" type="text/javascript"></script>
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
@stop


