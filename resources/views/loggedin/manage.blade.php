@extends('layouts.loggedin_master')

@section('additional_css')
	<link rel="stylesheet" href="/css/myProfile.css">
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

@stop

@section('js')
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