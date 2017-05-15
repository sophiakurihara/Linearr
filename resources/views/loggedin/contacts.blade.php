@extends('layouts.loggedin_master')

@section('additional_css')
	<link rel="stylesheet" href="/css/myProfile.css">
@stop

@section('additional_css_tables')
	<link rel="stylesheet" href="/css/tables.css">
@stop

@section('loggedin_content')
	

	<div id="calendarContainer">
            <h1>Contacts</h1><div class="add-contact-btn">Add Contact</div>
            <hr>
			<div class="contact-form">
				<form action="{{ action('ContactsController@addContact') }}" method="POST">
					<label for="first_name">First Name:</label>
					<input name="first_name" id="first_name">
				</form>
			</div>
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
		// on .click of createEvents subsection content in users panel 
		$(document).ready(function(){
			$('#createEvent').click(function(){
				('.modal').css({"display" : "show", "width" : '50%'});
			});
		});
	</script>
@stop