@extends('layouts.loggedin_master')

@section('additional_css')
	<link rel="stylesheet" href="/css/myProfile.css">
@stop

@section('additional_css_tables')
	<link rel="stylesheet" href="/css/tables.css">
@stop

@section('loggedin_content')

<?php $err = []; ?>
<?php
	if($errors->isEmpty()) {
		$clicked = 0;
	} else {
		$clicked = 1;
	}
?>

	<div id="calendarContainer">
		<h1>Contacts</h1><div class="add-contact-btn">Add Contact</div>
		<hr>

		<div class="contact-form">
			<form action="{{ action('ContactsController@addContact') }}" method="POST">
				{{ csrf_field() }}
				<?php $err['first_name'] = $errors->has('first_name') ? "style='border-bottom: 1px solid red'" : ''; ?>
				<label for="first_name">First Name:</label>
				<input name="first_name" placeholder="{{ $errors->has('first_name') ? $errors->first('first_name') : 'First Name' }}" id="first_name" value="{{$errors->has('first_name') ? '' : old('first_name') }}" <?php echo $err['first_name']; ?>>

				<?php $err['last_name'] = $errors->has('last_name') ? "style='border-bottom: 1px solid red'" : ''; ?>
				<label for="last_name">Last Name:</label>
				<input name="last_name" placeholder="{{ $errors->has('last_name') ? $errors->first('last_name') : 'Last Name' }}" id="last_name" value="{{$errors->has('last_name') ? '' : old('last_name') }}" <?php echo $err['last_name']; ?>>

				<?php $err['phone'] = $errors->has('phone_number') ? "style='border-bottom: 1px solid red'" : ''; ?>
				<label for="phone">Phone:</label>
				<input name="phone_number" placeholder="{{ $errors->has('phone_number') ? $errors->first('phone_number') : 'Phone Number' }}" value="{{$errors->has('phone_number') ? '' : old('phone_number') }}"id="phone" <?php echo $err['phone']; ?>>

				<?php $err['email'] = $errors->has('email') ? "style='border-bottom: 1px solid red'" : ''; ?>
				<label for="email">Email:</label>
				<input name="email" placeholder="{{ $errors->has('email') ? $errors->first('email') : 'Email Address' }}" id="email" value="{{$errors->has('email') ? '' : old('email') }}" <?php echo $err['email']; ?>>
				<button type="submit" class="submit-contact-btn">Submit</button>
			</form>
		</div>

		<div class="table-container">
			<table class="table-fill">
			<thead>
			<tr>
				<th class="text-left">First Name</th>
				<th class="text-left">Last Name</th>
				<th class="text-left">Phone</th>
				<th class="text-left">Email</th>
			</tr>
			</thead>

			<tbody class="table-hover">
			@foreach($contacts as $contact)
				<tr>
					<td class="text-left">{{ $contact->first_name}}</td>
					<td class="text-left">{{ $contact->last_name}}</td>
					<td class="text-left">{{ $contact->phone_number}}</td>
					<td class="text-left">{{ $contact->email}}</td>
				</tr>
			@endforeach
			
			</tbody>
			</table>
		</div>
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
@stop
@section('js')
	<script>
		$(document).ready(function(){
			var $clicked = "<?php echo $clicked; ?>";
			console.log($clicked);
			if($clicked == 1) {
				$(".table-container").css("float", "right");
				$(".table-container").animate({
					"width":"60%"
				}, 300);
				setTimeout(function(){
					$(".contact-form").fadeIn(400);
				}, 500);
			}

			$('.add-contact-btn').click(function(){
				$(".table-container").css("float", "right");
				$(".table-container").animate({
					"width":"60%"
				}, 300);
				setTimeout(function(){
					$(".contact-form").fadeIn(400);
				}, 500);
			});
		});
	</script>
@stop