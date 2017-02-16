@extends('layouts.app')

@section('content')
	<h1>All pins</h1>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pins as $pin)
					<tr>
						<td>{{ $pin->id }}</td>
						<td><a href="{{ action('PinsController@show', $pin->id)}}">{{ $pin->name }}</a></td>
					</tr>		
				@endforeach
			</tbody>
		</table>

		<a href="{{ action('PinsController@create') }}">New pin</a>
@endsection
