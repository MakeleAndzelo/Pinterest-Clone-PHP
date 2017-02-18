@extends('layouts.app')

@section('content')
	<h1>{{ $pin->name }}</h1>
	<p>
		{{ $pin->description }}
	</p>
	<img src="{{ '/' . $pin->image_path }} ">

	<small>{{ $pin->likeCount }}</small>
	@if(!$pin->liked())
		<a href="{{ route('pins.upvote', $pin->id) }}">Upvote</a>
	@else
		<a href="{{ route('pins.downvote', $pin->id) }}">Downvote</a>
	@endif
	<h1>
		<form action="{{ route('pins.destroy', $pin->id) }}" method="POST">
			{{ csrf_field() }}
			{{ method_field("DELETE") }}
			<button type="submit">Delete</button>
		</form>
	</h1>
@endsection