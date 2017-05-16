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

		<tbody class="table-hover">
			<tr>
				<div class="editingRows profilePicture">
					<a id="profilePictureEdit">
						<div class="editIcon" id="profilePictureEdit"></div>
					Profile Picture</a>
					
						<button type="submit" name="editPictureButton" class="uploadProfilePic">Upload Picture</button>
				
				</div>

				<!-- form for uploading files -->
				<!-- 	<form method="POST" enctype="multipart/form-data">
						<input type="file" name="uploadPic" class="uploadProfilePic ">
					</form> -->
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

@stop

@section('js')
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