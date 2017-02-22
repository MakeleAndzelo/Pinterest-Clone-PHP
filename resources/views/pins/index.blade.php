@extends('layouts.app')

@section('content')
	<div class="columns is-multiline">
		@foreach($pins as $pin)
			<div class="column is-4">
				<a href="{{ route('pins.show', $pin->id) }}">
					<figure class="image">
						<img src="/{{ $pin->image_path }}" alt="">
						<figcaption>
							<h1>{{ $pin->name }}</h1>
							<small>Subbmited by {{ $pin->user->name }} {{ $pin->created_at->diffForHumans() }}</small>
						</figcaption>
					</figure>
				</a>
			</div>
		@endforeach
	</div>
@endsection

@section('footer')

@endsection