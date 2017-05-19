@extends('layouts.loggedin_master')

@section('additional_css')
	<link rel="stylesheet" href="/css/myProfile.css">
	<script src="https://unpkg.com/flatpickr"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link href="/css/jquery-ui.css" rel="stylesheet">
@stop

@section('additional_css_tables')
	<link rel="stylesheet" href="/css/tables.css">
@stop

@section('loggedin_content')
	
	
	<div id="settingsMainContainer">
        <h1>Settings</h1>
        <hr>

		<tbody class="table-hover">
			<tr>
				<form method="POST" enctype="multipart/form-data" action="{{ action('UsersController@updateProfilePicture') }}">
				{!! csrf_field() !!}

				<!-- {{ method_field('POST')}}  -->
				<div class="editingRows profilePicture">
					<a id="profilePictureEdit">
						<div class="editIcon" id="profilePictureEdit"></div>
					Profile Picture</a>
					
				<!-- form for uploading files -->
					<input type="file" name="uploadPic" class="uploadProfilePic">
					<button type="submit" name="editPictureButton" class="uploadProfilePic">Upload Picture</button>
				</form>
					
				
				</div>

				<div class="editingRows firstName">
					<!-- chosing post method to populate... Choosing what controller function we need to access for the form to work -->
					<form method="POST" action="{{ action('UsersController@editAccount') }}">
					{!! csrf_field() !!}
					<!-- PUT is for updating as to originally POSTing something to the DB -->
					{{ method_field('PUT')}} 

						<a id="firstNameEdit">
							<div class="editIcon"></div>
							First Name
						</a>
						<button type="submit" name="firstNameButton" class="saveFirstNameButton">save</button>
						<input type="text" name="first_name" class="editFirstName">
					</form>
				</div>

				<div class="editingRows lastName">
					<!-- chosing post method to populate... Choosing what controller function we need to access for the form to work -->
					<form method="POST" action="{{ action('UsersController@editAccount') }}">
					{!! csrf_field() !!}
					<!-- updates information -->
					{{ method_field('PUT') }} 

						<a id="lastNameEdit">
							<div class="editIcon"></div>
							Last Name
						</a>
						<button type="submit" name="lastNameButton" class="saveLastNameButton">save</button>
						<input type="text" name="last_name" class="editLastName">
					</form>
				</div>

				<div class="editingRows phoneNumber">
					<!-- chosing post method to populate... Choosing what controller function we need to access for the form to work -->
					<form method="POST" action="{{ action('UsersController@editAccount') }}">
					{!! csrf_field() !!} 
					{{ method_field('PUT') }}

						<a id="phoneNumberEdit">
							<div class="editIcon"></div>
							Phone Number
						</a>
						<!-- creating a name to be referenced in the controller's function -->
						<button type="submit" name="phoneNumberButton" class="savePhoneNumberButton">save</button>
						<input type="text" name="phone" class="editPhoneNumber">
					</form>
				</div>
				<div class="editingRows email">
					<form method="POST" action="{{ action('UsersController@editAccount') }}">
					{!! csrf_field() !!}
					{{ method_field('PUT')}}

						<a id="emailEdit">
							<div class="editIcon"></div>
							Email
						</a>

						<button type="submit" name="emailButton" class="saveEmailButton">save</button>
						<input type="text" name="email" class="editEmail">
					</form>
				</div>
			</tr>
		</tbody>
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
			            <input type="text" for="date_of_event" name="date_of_event" placeholder="Date" id="datepicker" value="{{ $errors->has('date_of_event') ? '' : old('date_of_event') }}">
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
		$("#profilePictureEdit").click(function(){
			$(".uploadProfilePic").fadeIn(500);
			console.log('You clicked edit profile picture');
		});	

		$("#firstNameEdit").click(function(){
			$(".editFirstName").fadeIn(500);
			$("#settingsMainContainer > div.editingRows.firstName > form > button").fadeIn(500);
			console.log('You are trying to edit your first name');
		});

		$("#lastNameEdit").click(function(){
			$(".editLastName").fadeIn(500);
			$("#settingsMainContainer > div.editingRows.lastName > form > button").fadeIn(500);
			console.log('You are trying to edit your first name');
		});

		$("#phoneNumberEdit").click(function(){
			$(".editPhoneNumber").fadeIn(500);
			$("#settingsMainContainer > div.editingRows.phoneNumber > form > button").fadeIn(500);
			console.log('You are trying to edit your first name');
		});

		$("#emailEdit").click(function(){
			$(".editEmail").fadeIn(500);
			$("#settingsMainContainer > div.editingRows.email > form > button").fadeIn(500);
		});
	});
</script>


@stop
