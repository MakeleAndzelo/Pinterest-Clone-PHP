@extends('layouts.app')

@section('content')
	<form method="POST" action="/pins/{{ $pin->id }}">
		{{ method_field("PUT") }}
		@include('pins._form', ['btn' => 'Edit', 'action' => 'edit'])
		
	</form>
@endsection