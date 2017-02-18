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
@endsection