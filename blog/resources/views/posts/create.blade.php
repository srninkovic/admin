@extends('main')

@section('title', '| Add New Post')

@section('content')

	<div class="container">

		{{-- Check if current user is logged-in or a guest --}}
		@if (Auth::guest())

			<p class="mt-5">Please <a href="/login/">login</a> to add a new post.</p>

		@else

			<div class="blog-header">
		        <h1 class="blog-title">Add New Post</h1>
		    </div>

			<div class="row">
				<div class="push-md-2 col-md-8">

					<form enctype="multipart/form-data" action="{{ route('posts.store') }}" method="POST">
						{{ csrf_field() }}

						<input type="hidden" name="author_ID" value="{{ Auth::id() }}" />
						<input type="hidden" name="post_type" value="post" />

						<div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
							<label for="post_title">Title</label> <br/>
							<input type="text" name="post_title" id="post_title" value="{{ old('post_title') }}" />

							@if ($errors->has('post_title'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('post_title') }}</strong>
	                            </span>
	                        @endif
						</div>

						<div class="form-group{{ $errors->has('post_slug') ? ' has-error' : '' }}">
							<label for="post_slug">Slug</label> <br/>
							<input type="text" name="post_slug" id="post_slug" value="{{ old('post_slug') }}" />

							@if ($errors->has('post_slug'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('post_slug') }}</strong>
	                            </span>
	                        @endif
						</div>

						<div class="form-group{{ $errors->has('post_content') ? ' has-error' : '' }}">
							<label for="post_content">Content</label> <br/>
							<textarea name="post_content" id="post_content" cols="80" rows="6">{{ old('post_content') }}</textarea>

							@if ($errors->has('post_content'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('post_content') }}</strong>
	                            </span>
	                        @endif
						</div>

						<div class="form-group">
							<label for="title">Category</label> <br/>

							<?php $categories = Helper::get_categories(); ?>
							<select name="category_ID" id="category_ID">
								<?php
									if( $categories ) {
										foreach( $categories as $category ) {
											?>
												<option value="{{ $category->id }}">{{ $category->category_name }}</option>
											<?php
										}
									}
								?>
							</select>
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
							<input type="submit" class="btn btn-primary" value="Publish" />
							<a class="btn btn-primary" href="{{ route('posts.index') }}">Cancel</a>
						</div>
					</form>

				</div>
			</div>

		@endif

	</div>

@endsection
