@extends('layouts.loggedin_master')

@section('additional_css')
	<link rel="stylesheet" href="/css/myProfile.css">
@stop

@section('additional_css_tables')
	<link rel="stylesheet" href="/css/tables.css">
@stop

@section('loggedin_content')
<?php
	$i = 0;
?>
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
					<td class="<?= 'text-left-manage-' . $i ?>" data-id="<?= $i; ?>" onmouseover="hoverOverColumn('<?= $i; ?>')" >
						<form method="POST" action="{{ action('EventsController@editEvent', $event->id) }}">
							{!! csrf_field() !!}
							{{ method_field('PUT') }}
							<a id="titleEdit">
								{{ $event->title}}
								<div class="<?='editEventsIcon-' . $i ?> eventsIcon" data-id="<?= $i; ?>" onclick="showInputForEditing('<?= $i; ?>')"></div>
							</a>
							<input type="text" name="title" data-id="<?= $i; ?>" class="<?= 'editTitle-' . $i ?> ">
							<button type="submit" data-id="<?= $i; ?>" name="titleButton" class="<?= 'saveTitle-' . $i ?>">Save</button>
						</form>
					</td>

					<td class="text-left-manage">
						<form method="POST" action="{{ action ('EventsController@editEvent', $event->id) }}">
							{!! csrf_field() !!}
							{{ method_field('PUT') }}
							<a id="descriptionEdit">
								{{ $event->description}}
								<div class="editEventsIcon" data-id="<?= $i; ?>"></div>
							</a>
							<input type="text" name="description" class="editDescription">
							<button type="submit" data-id="<?= $i; ?>" name="descriptionButton" class="saveDescription">Save</button>
						</form>
					</td>

					<td class="text-left-manage">
						<form method="POST" action="{{ action ('EventsController@editEvent', $event->id) }}">
							{!! csrf_field() !!}
							{{ method_field('PUT') }}
							<a id="dateEdit">
								{{ $event->date_of_event}}
								<div class="editEventsIcon" data-id="<?= $i; ?>"></div>
							</a>
							<input type="text" name="date_of_event" class="editDate">
							<button type="submit" data-id="<?= $i; ?>" name="dateButton" class="saveDate">Save</button>
						</form>
					</td>

					<td class="text-left-manage">
						<form method="POST" action="{{ action('EventsController@editEvent', $event->id) }}">
							{!! csrf_field() !!}
							{{ method_field('PUT') }}
							<a id="sentEdit">
								{{ $event->sent_to}}
								<div class="editEventsIcon-" data-id="<?= $i; ?>" onclick="showInputForEditing('<?= $i; ?>')"></div>
							</a>
							<input type="text" name="sent_to" class="<?= 'editSent-' . $i ?>">
							<button type="submit" data-id="<?= $i; ?>" name="sentButton" class="saveSent">Save</button>
						</form>
					</td>
				</tr>
				<?php $i++; ?>
			@endforeach
			</tbody>
			</table>
		</div>
	</div>
@stop
@section('js')
<script>

	function hoverOverColumn(id){
		console.log('hovering over text-left-manage' + id);
		$('.editEventsIcon-' + id).fadeIn(440);
	};
	
	function showInputForEditing(id){
		console.log('editing title' + id);
		$('.editTitle-' + id).fadeIn(500);
		$('.saveTitle-' + id).fadeIn(500);
	};
	
</script>
@stop