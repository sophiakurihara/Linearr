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
					<td class="text-left">{{ $event->title}}</td>
					<td class="text-left">{{ $event->description}}</td>
					<td class="text-left">{{ $event->date_of_event}}</td>
					<td class="text-left">{{ $event->sent_to}}</td>
				</tr>
			@endforeach
			
			</tbody>
			</table>
		</div>
	</div>

@stop