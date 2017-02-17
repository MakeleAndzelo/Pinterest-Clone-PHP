@extends('layouts.app')

@section('content')
	<h1>{{ $pin->name }}</h1>
	<p>
		{{ $pin->description }}
	</p>
	<img src="{{ '/storage' . $pin->image_path }} ">
@endsection