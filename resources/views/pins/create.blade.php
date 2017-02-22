@extends('layouts.app')

@section('content')
	<h1>New pin</h1>
	<form method="POST" action="/pins" enctype="multipart/form-data">
		@include('pins._form', ['btn' => 'Create'])
	</form>
@endsection

@section('footer')
	<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
	<script>
		CKEDITOR.replace('description');
	</script>
@endsection