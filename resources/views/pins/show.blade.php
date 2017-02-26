@extends('layouts.app')

@section('content')
	<div class="columns">
		<div class="column is-8 is-offset-2">
			<div class="card">
				<header class="card-header">
				    <p class="card-header-title">
				      {{ $pin->name }}
				    </p>
				</header>
			  <div class="card-image">
			    <figure class="image is-4by3">
			      <img src="{{ '/' . $pin->image_path }} ">
			    </figure>
			  </div>
			  <div class="card-content">
			  	<div class="media-left">
				@if(!$pin->liked())
					<a href="{{ route('pins.upvote', $pin->id) }}" class="button">
						<span class="icon is-small">
							<i class="fa fa-thumbs-up" aria-hidden="true"></i>
						</span>
					</a>
				@else
					<a href="{{ route('pins.downvote', $pin->id) }}" class="button">
						<span class="icon is-small">
							<i class="fa fa-thumbs-down" aria-hidden="true"></i>
						</span>
					</a>
				@endif
				  <a id="delete-btn" class="button is-danger is-outlined">
				    <span>Delete</span>
				    <span class="icon is-small">
				      <i class="fa fa-times"></i>
				    </span>
				  </a>
				<form id="delete-form" action="{{ route('pins.destroy', $pin->id) }}" method="POST">
					{{ csrf_field() }}
					{{ method_field("DELETE") }}
				</form>
			  	</div>
			    <div class="media">
			      <div class="media-content">
			        <p class="title is-4">{{ $pin->user->name }}</p>
			        <p class="subtitle is-6">@ {{ $pin->user->email }}</p>
			      </div>
			    </div>

			    <div class="content">
			      {!!  $pin->description !!}
			      <br>
			      <small>Posted {{ $pin->created_at->diffForHumans() }}</small>
			      <br>
			      <small>{{ $pin->likeCount }} {{ str_plural('like', $pin->likeCount) }}</small>
			    </div>
			  </div>
			</div>
			<hr>
			<div id="disqus_thread"></div>
		</div>
	</div>
@endsection

@section('footer')
	<script>

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
		/*
		 var disqus_config = function () {
		 this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
		 this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
		 };
		 */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = '//pinterest-clone.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();

	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection
