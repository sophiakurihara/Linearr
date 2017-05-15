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
						</a>Profile Picture
					</div>
					<div class="editingRowsPicture profilePicture hide">
						<input type="text" name="editProfPicture"></input>
						<button type="submit">Save</button>
						<div class="editIcon"></div>
					</div>
						<!-- Instead of text, insert the profile picture where the text is located .... upon click of the edit png/href a have pop up to choose from your desktop/finder etc.  -->
					<div class="editingRows firstName"><a id="firstNameEdit"><div class="editIcon"></div></a>First Name</div>
					<div class="editingRows lastName"><a id="lastNameEdit"><div class="editIcon"></div></a>Name</div>
					<div class="editingRows phoneNumber"><a id="firstNameEdit"><div class="editIcon"></div></a>Phone Number</div>
				</tr>
			</tbody>


	</div>	

@stop

@section('js')
<script>
	$(document).ready(function(){

		$("#profilePictureEdit").click(function(){
		    $(this).removeClass("profilePicture");
		    console.log('You clicked the edit button.');
		    // $(this).removeClass("profilePicture");
		    $(this).addClass("editingRowsPicture");
		});	
	});
</script>