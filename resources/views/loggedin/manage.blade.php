@extends('layouts.loggedin_master')

@section('additional_css')
	<link rel="stylesheet" href="/css/myProfile.css">
    <link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
   	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="/css/jquery-ui.css" rel="stylesheet">

@stop

@section('additional_css_tables')
	<link rel="stylesheet" href="/css/tables.css">
@stop

@section('loggedin_content')

	<div id="settingsMainContainer">
		<h1>Manage Events</h1>
		<hr>

		<div class="table-container">
			<table class="table-fill">
			<thead>
			<tr>
				<th class="text-left">Title</th>
				<th class="text-left">Description</th>
				<th class="text-left">Date of Event</th>
				<th class="text-left">Sent To</th>
			</tr>
			</thead>

			<tbody class="table-hover">
			@foreach($events as $event)
				<tr>
					<td class="text-left">
					<form method="POST" action="{{ action('EventsController@editEvent', $event->id) }}">
						{!! csrf_field() !!}
						{{ method_field('PUT') }}
						<a id="titleEdit">
							{{ $event->title}}
							<div class="editIcon"></div>
						</a>
						<input type="text" name="title" class="editTitle">
						<button type="submit" name="titleButton" class="saveTitle">Save</button>
					</form>
					</td>

					<td class="text-left">
					<form method="POST" action="{{ action ('EventsController@editEvent', $event->id) }}">
						{!! csrf_field() !!}
						{{ method_field('PUT') }}
						<a id="descriptionEdit">
							{{ $event->description}}
							<div class="editIcon"></div>
						</a>
						<input type="text" name="description" class="editDescription">
						<button type="submit" name="descriptionButton" class="saveDescription">Save</button>
					</form>
					</td>

					<td class="text-left">
					<form method="POST" action="{{ action ('EventsController@editEvent', $event->id) }}">
						{!! csrf_field() !!}
						{{ method_field('PUT') }}
						<a id="dateEdit">
							{{ $event->date_of_event}}
							<div class="editIcon"></div>
						</a>
						<input type="text" name="date_of_event" class="editDate">
						<button type="submit" name="dateButton" class="saveDate">Save</button>
					</form>
					</td>

					<td class="text-left">
					<form method="POST" action="{{ action('EventsController@editEvent', $event->id) }}">
						{!! csrf_field() !!}
						{{ method_field('PUT') }}
						<a id="sentEdit">
							{{ $event->sent_to}}
							<div class="editIcon"></div>
						</a>
						<input type="text" name="sent_to" class="editSent">
						<button type="submit" name="sentButton" class="saveSent">Save</button>
					</form>
					</td>
				</tr>
			@endforeach
			
			</tbody>
			</table>
		</div>
	</div>

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
					<div class="modal-content-div-textarea">
			            <textarea rows="3" cols="40" type="text" for="description" placeholder="Description" name="description" id="description" value="{{ $errors->has('description') ? '' : old('description') }}" autocomplete="off"></textarea>
					</div>
					
					<div class="modal-content-div-datepicker">
			            <input type="text" for="date_of_event" name="date_of_event" placeholder="Date" id="datepicker" value="{{ $errors->has('date_of_event') ? '' : old('date_of_event') }}">
			        </div>
			        <div class="modal-content-div">         
			            <input for="sent_to" placeholder="Contacts" type="text" name="sent_to" id="sent_to" value="{{ $errors->has('sent_to') ? '' : old('sent_to') }}" autocomplete="off">
					</div>
				</div>
				<div style="margin-top: 10px;">
					{{ method_field('POST') }}
					<button type="submit" class="create-event-button">Create Event</button>
				</div>
		    </form>	
		</div>
	</div> 

@stop

@section('js')
	<script src="https://unpkg.com/flatpickr"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	$(document).ready(function (){
		$("#titleEdit").click(function (){
			$(".editTitle").fadeIn(500);
			$(".saveTitle").fadeIn(500);
		});
		$("#descriptionEdit").click(function (){
			$(".editDescription").fadeIn(500);
			$(".saveDescription").fadeIn(500);
		});
		$("#dateEdit").click(function (){
			$(".editDate").fadeIn(500);
			$(".saveDate").fadeIn(500);
		});
		$("#sentEdit").click(function (){
			$(".editSent").fadeIn(500);
			$(".saveSent").fadeIn(500);
		});
	});
</script>
@stop