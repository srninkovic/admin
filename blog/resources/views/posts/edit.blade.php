@extends('main')

@section('title', '| Add New Post')

@section('content')

	<div class="container">

		{{-- Check if current user is logged-in or a guest --}}
		@if (Auth::guest())

			<p class="mt-5">Cheatn?, please <a href="/login/">login</a> to continue.</p>

		@else
			<div class="blog-header">
		        <h1 class="blog-title">Edit Post <a class="btn btn-sm btn-primary" href="{{ route('posts.show', $post->id) }}">Preview Changes</a></h1>
		    </div>

			<div class="row">
				<div class="push-md-2 col-md-8">
					<form enctype="multipart/form-data" action="{{ route('posts.update', $post->id) }}" method="POST">
						{{ csrf_field() }}

						{{ method_field('PUT') }}

						<input type="hidden" name="author_ID" value="{{ Auth::id() }}" />
						<input type="hidden" name="post_type" value="post" />

						<div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
							<label for="post_title">Title</label> <br/>
							<input type="text" name="post_title" id="post_title" value="{{ $post->post_title }}" />

							@if ($errors->has('post_title'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('post_title') }}</strong>
	                            </span>
	                        @endif
						</div>

                        <div class="form-group{{ $errors->has('post_title2') ? ' has-error' : '' }}">
							<label for="post_title2">Title2</label> <br/>
							<input type="text" name="post_title2" id="post_title" value="{{ $post->post_title2 }}" />

							@if ($errors->has('post_title2'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('post_title2') }}</strong>
	                            </span>
	                        @endif
						</div>

                        <div class="form-group{{ $errors->has('post_title3') ? ' has-error' : '' }}">
                            <label for="post_title3">Title3</label> <br/>
                            <input type="text" name="post_title3" id="post_title" value="{{ $post->post_title3 }}" />

                            @if ($errors->has('post_title3'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('post_title3') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('post_title4') ? ' has-error' : '' }}">
                            <label for="post_title4">Title4</label> <br/>
                            <input type="text" name="post_title4" id="post_title" value="{{ $post->post_title4 }}" />

                            @if ($errors->has('post_title4'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('post_title4') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('post_title5') ? ' has-error' : '' }}">
                            <label for="post_title5">Title5</label> <br/>
                            <input type="text" name="post_title5" id="post_title" value="{{ $post->post_title5 }}" />

                            @if ($errors->has('post_title5'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('post_title5') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('post_title2') ? ' has-error' : '' }}">
                            <label for="post_title2">Title2</label><br/>
                            <input type="text" name="post_title2" id="post_title" value="{{ $post->post_title2 }}" />

                            @if ($errors->has('post_title2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('post_title2') }}</strong>
                                </span>
                            @endif
                        </div>

						<div class="form-group{{ $errors->has('post_slug') ? ' has-error' : '' }}">
							<label for="post_slug">Slug</label> <br/>
							<input type="text" name="post_slug" id="post_slug" value="{{ $post->post_slug }}" />

							@if ($errors->has('post_slug'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('post_slug') }}</strong>
	                            </span>
	                        @endif
						</div>

						<div class="form-group{{ $errors->has('post_content') ? ' has-error' : '' }}">
							<label for="post_content">Content</label> <br/>
							<textarea name="post_content" id="post_content" cols="80" rows="6">{{ $post->post_content }}</textarea>

							@if ($errors->has('post_content'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('post_content') }}</strong>
	                            </span>
	                        @endif
						</div>

                        <div class="form-group{{ $errors->has('post_content2') ? ' has-error' : '' }}">
                            <label for="post_content2">Content2</label> <br/>
                            <textarea name="post_content2" id="post_content2" cols="80" rows="6">{{ $post->post_content2 }}</textarea>

                            @if ($errors->has('post_content2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('post_content2') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('post_content3') ? ' has-error' : '' }}">
                            <label for="post_content3">Content3</label> <br/>
                            <textarea name="post_content3" id="post_content3" cols="80" rows="6">{{ $post->post_content3 }}</textarea>

                            @if ($errors->has('post_content3'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('post_content3') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('post_content4') ? ' has-error' : '' }}">
                            <label for="post_content4">Content4</label> <br/>
                            <textarea name="post_content4" id="post_content4" cols="80" rows="6">{{ $post->post_content4 }}</textarea>

                            @if ($errors->has('post_content4'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('post_content4') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('post_content5') ? ' has-error' : '' }}">
                            <label for="post_content5">Content5</label> <br/>
                            <textarea name="post_content5" id="post_content5" cols="80" rows="6">{{ $post->post_content5 }}</textarea>

                            @if ($errors->has('post_content5'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('post_content5') }}</strong>
                                </span>
                            @endif
                        </div>

						<div class="form-group">
							<label for="post_thumbnail">image0</label> <br/>
							<input type="file" name="post_thumbnail" id="post_thumbnail" />

						</div>

                        <hr />

                        <div class="form-group">
                            <label for="post_image">image1</label> <br/>
                            <input type="file" name="post_image" id="post_image" />

                        </div>

                        <hr />

                        <div class="form-group">
                        	<label for="post_image2">image2</label> <br/>
                        	<input type="file" name="post_image2" id="post_image2" />

                        </div>

                        <hr />

                        <div class="form-group">
                            <label for="post_image3">image3</label> <br/>
                            <input type="file" name="post_image3" id="post_image3" />

                        </div>

                        <hr />

                        <div class="form-group">
                            <label for="post_image4">image4</label> <br/>
                            <input type="file" name="post_image4" id="post_image4" />

                        </div>

                        <hr />

                        <div class="form-group">
                            <label for="post_image5">image5</label> <br/>
                            <input type="file" name="post_image5" id="post_image5" />

                        </div>

						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Update" />
							<a class="btn btn-primary" href="{{ route('posts.index') }}">Cancel</a>
						</div>
					</form>

				</div>
			</div>

		@endif

	</div>

@endsection
