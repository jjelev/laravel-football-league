@extends('layouts.scaffold')

@section('main')

{{ Form::model($team, array('method' => 'PATCH', 'route' => array('teams.update', $team->id), 'class' => 'form-signin')) }}
    <h1>Edit Team</h1>
	<ul>
        <li>
            {{ Form::text('name', 'Name', array('class' => 'form-control')) }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('teams.show', 'Cancel', $team->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop