@extends('main')

@section('title', '| Add New Post')

@section('content')

	<div class="container">

		{{-- Check if current user is logged-in or a guest --}}
		@if (Auth::guest())

			<p class="mt-5">Cheatn?, please <a href="/login/">login</a> to continue.</p>

		@else

			<div class="blog-header">
		        <h1 class="blog-title">{{ $post->post_title }} + {{ $post->post_title2 }} + {{ $post->post_title3 }} + {{ $post->post_title4 }} + {{ $post->post_title5 }}</h1>
		        <p>{{ date('M j, Y', strtotime( $post->created_at )) }} <a href="{{ route('posts.edit', $post->id) }}">{Edit}</a></p>
		    </div>

			<div class="row">
				<div class="col-sm-12 blog-main">

					<div class="blog-thumbnail">
						<img src="/uploads/{{ $post->post_thumbnail }}" alt="{{ $post->post_title }}" />
					</div>

                    <hr />

                    <div class="blog-thumbnail">
                        <img src="/uploads/{{ $post->post_image }}" alt="{{ $post->post_image }}" />
                    </div>

                    <hr />

                    <div class="blog-thumbnail">
                        <img src="/uploads/{{ $post->post_image2 }}" alt="{{ $post->post_image2 }}" />
                    </div>

                    <hr />

                    <div class="blog-thumbnail">
                        <img src="/uploads/{{ $post->post_image3 }}" alt="{{ $post->post_image3 }}" />
                    </div>

                    <hr />

                    <div class="blog-thumbnail">
                        <img src="/uploads/{{ $post->post_image4 }}" alt="{{ $post->post_image4 }}" />
                    </div>

                    <hr />

                    <div class="blog-thumbnail">
                        <img src="/uploads/{{ $post->post_image5 }}" alt="{{ $post->post_image5 }}" />
                    </div>

					<div class="blog-content">
						{!! nl2br( $post->post_content ) !!} <br />
                        {!! nl2br( $post->post_content2 ) !!} <br />
                        {!! nl2br( $post->post_content3 ) !!} <br />
                        {!! nl2br( $post->post_content4 ) !!} <br />
                        {!! nl2br( $post->post_content5 ) !!} <br />
					</div>

				</div>
			</div>

		@endif

	</div>

@endsection
