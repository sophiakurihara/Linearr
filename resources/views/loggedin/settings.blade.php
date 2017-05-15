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
						
							<button type="submit" class="uploadProfilePic">Upload Picture</button>
					
					</div>

					<!-- form for uploading files -->
					<!-- 	<form method="POST" enctype="multipart/form-data">
							<input type="file" name="uploadPic" class="uploadProfilePic ">
						</form> -->
					<div class="editingRows firstName">
						<a id="firstNameEdit">
							<div class="editIcon"></div>
							First Name
						</a>
						<button type="submit" class="saveFirstNameButton">save</button>
						<input type="text" class="editFirstName">
					</div>
					
					<div class="editingRows lastName">
						<a id="lastNameEdit">
							<div class="editIcon"></div>
							Last Name
						</a>
						<button type="submit" class="saveLastNameButton">save</button>
						<input type="text" class="editLastName">
					</div>

					<div class="editingRows phoneNumber">
						<a id="phoneNumberEdit">
							<div class="editIcon"></div>
							Phone Number
						</a>
						<button type="submit" class="savePhoneNumberButton">save</button>
						<input type="text" class="editPhoneNumber">
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
			$("#settingsMainContainer > div.editingRows.firstName > button").fadeIn(500);
			console.log('You are trying to edit your first name');
		});

		$("#lastNameEdit").click(function(){
			$(".editLastName").fadeIn(500);
			$("#settingsMainContainer > div.editingRows.lastName > button").fadeIn(500);
			console.log('You are trying to edit your first name');
		});

		$("#phoneNumberEdit").click(function(){
			$(".editPhoneNumber").fadeIn(500);
			$("#settingsMainContainer > div.editingRows.phoneNumber > button").fadeIn(500);
			console.log('You are trying to edit your first name');
		});



	});
</script>
@stop