@extends('layouts.app')

@section('content')
	<h1>{{ $pin->name }}</h1>
	<p>
		{{ $pin->description }}
	</p>
@endsection