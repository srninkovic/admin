@extends('main')

@section('title')
    | {{ $post->post_title }}
@endsection

@section('content')

    <div class="blog-header">
        <h1 class="blog-title">{{ $post->post_title }} + {{ $post->post_title2 }} + {{ $post->post_title3 }} + {{ $post->post_title4 }} + {{ $post->post_title5 }}</h1>
        <p> {{ date('M j, Y', strtotime( $post->created_at )) }} <a href="{{ route('posts.edit', $post->id) }}">{Edit}</a></p>
    </div>

    <div class="row">
        <div class="col-sm-8 blog-main">

            @if( $post->post_thumbnail )
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
            @endif

            <div class="blog-content">
                {!! nl2br( $post->post_content ) !!} <br />
                {!! nl2br( $post->post_content2 ) !!} <br />
                {!! nl2br( $post->post_content3 ) !!} <br />
                {!! nl2br( $post->post_content4 ) !!} <br />
                {!! nl2br( $post->post_content5 ) !!} <br />
            </div>

            {{-- <section class="mt-5" id="respond">
                <h2>Comments</h2> --}}
                <?php
                    // echo Helper::get_comments( $post->id );
                ?>
            </section>

            {{-- <section class="mt-5" id="comment">
                @includeIf('comments.form', ['post_id' => $post->id])
            </section> --}}
        </div>


        {{-- @include('partials._sidebar') --}}
    </div>

@endsection
