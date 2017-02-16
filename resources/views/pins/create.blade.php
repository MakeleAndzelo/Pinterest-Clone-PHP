@extends('layouts.app')

@section('content')
	<h1>New pin</h1>
	<form method="POST" action="/pins">
		@include('pins._form', ['btn' => 'Create'])
	</form>
@endsection