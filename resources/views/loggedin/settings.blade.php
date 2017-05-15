@extends('layouts.loggedin_master')

@section('additional_css')
	<link rel="stylesheet" href="/css/myProfile.css">
@stop

@section('additional_css_tables')
	<link rel="stylesheet" href="/css/tables.css">
@stop

@section('loggedin_content')
	
	
	<div id="settingsMainContainer">
            <h1>Settings</h1>
            <hr>

			<!-- <table class="table-fill">
			<thead>
			<tr>
				<th class="text-left" id="profilePicture">Profile Picture</th>
				<th class="text-left" id="firstName">First Name</th>
				<th class="text-left" id="lastName">Last Name</th>
				<th class="text-left" id="phone">Phone</th>
				<th class="text-left" id="email">Email</th>
			</tr>
			</thead> -->

			<tbody class="table-hover">

				<tr>
					<div class="editingRows profilePicture"><div class="settingsIcon"></div>Profile Picture</div>
						<!-- Instead of text, insert the profile picture where the text is located .... upon click of the edit png/href a have pop up to choose from your desktop/finder etc.  -->
						
					<div class="editingRows firstName"><div class="settingsIcon"></div>First Name</div>
					<div class="editingRows lastName"><div class="settingsIcon"></div>Last Name</div>
					<div class="editingRows phoneNumber"><div class="settingsIcon"></div>Phone Number</div>
				</tr>

			</tbody>
			</table>
	</div>	

@stop

@section('js')
<script>
	$("tr").hover(function(){
	    $(this).css("background-color", "yellow");
	    }, function(){
	    $(this).css("background-color", "pink");
	});	


</script>