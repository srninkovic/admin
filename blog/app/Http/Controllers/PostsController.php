<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use Image;
use Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch data in pagination so only 10 posts per page
        // To get all data you may use get() method
        $posts = Post::where('post_type', 'post')->paginate( 10 );

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Directly display `posts.create` view blade file
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate and filter user inputted data
        // Refer to `References` for more info
        $this->validate($request, [
            'post_title'        => 'required',
            'post_slug'         => 'required|alpha_dash|max:200|unique:posts,post_slug',
            'post_content'      => 'required',
        ]);

        // Create a new Post Model initialization
        // There are many ways to coke an Egg and same in storing data to database in Laravel
        // You might use or prefer this one https://laravel.com/docs/5.4/queries#inserts
        // I just love using Eloquent
        $post = new Post;

        $post->author_ID        = $request->author_ID;
        $post->post_type        = $request->post_type;
        $post->post_title       = $request->post_title;
        $post->post_title2      = $request->post_title2;
        $post->post_title3      = $request->post_title3;
        $post->post_title4      = $request->post_title4;
        $post->post_title5      = $request->post_title5;
        $post->post_slug        = $request->post_slug;
        $post->post_content     = $request->post_content;
        $post->post_content2    = $request->post_content2;
        $post->post_content3    = $request->post_content3;
        $post->post_content4    = $request->post_content4;
        $post->post_content5    = $request->post_content5;
        $post->category_ID      = $request->category_ID;

        // Check if file is present
        if( $request->hasFile('post_thumbnail') ) {
            $post_thumbnail     = $request->file('post_thumbnail');
            $filename           = time() . '.' . $post_thumbnail->getClientOriginalExtension();

            Image::make($post_thumbnail)->resize(600, 600)->save( public_path('uploads/' . $filename ) );

            // Set post-thumbnail url
            $post->post_thumbnail = $filename;
        }

        if( $request->hasFile('post_image') ) {
            $post_image     = $request->file('post_image');
            $filename           = time() . '.' . $post_image->getClientOriginalExtension();

            Image::make($post_image)->resize(600, 600)->save( public_path('uploads/' . $filename ) );

            // Set post-thumbnail url
            $post->post_image = $filename;
        }

        if( $request->hasFile('post_image2') ) {
            $post_image2     = $request->file('post_image2');
            $filename           = time() . '.' . $post_image2->getClientOriginalExtension();

            Image::make($post_image2)->resize(600, 600)->save( public_path('uploads/' . $filename ) );

            // Set post-thumbnail url
            $post->post_image2 = $filename;
        }

        if( $request->hasFile('post_image3') ) {
            $post_image3     = $request->file('post_image3');
            $filename           = time() . '.' . $post_image3->getClientOriginalExtension();

            Image::make($post_image3)->resize(600, 600)->save( public_path('uploads/' . $filename ) );

            // Set post-thumbnail url
            $post->post_image3 = $filename;
        }

        if( $request->hasFile('post_image4') ) {
            $post_image4     = $request->file('post_image4');
            $filename           = time() . '.' . $post_image4->getClientOriginalExtension();

            Image::make($post_image4)->resize(600, 600)->save( public_path('uploads/' . $filename ) );

            // Set post-thumbnail url
            $post->post_image4 = $filename;
        }

        if( $request->hasFile('post_image5') ) {
            $post_image5     = $request->file('post_image5');
            $filename           = time() . '.' . $post_image5->getClientOriginalExtension();

            Image::make($post_image5)->resize(600, 600)->save( public_path('uploads/' . $filename ) );

            // Set post-thumbnail url
            $post->post_image5 = $filename;
        }

        $post->save();

        // Store data for only a single request and destory
        Session::flash( 'sucess', 'Post published.' );

        // Redirect to `posts.show` route
        // Use route:list to view the `Action` or where this routes going to
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail( $id );

        return view('posts.show', [ 'post' => $post ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail( $id );

        return view('posts.edit', [ 'post' => $post ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'post_title'        => 'required',
            'post_slug'         => 'required|alpha_dash|max:200|unique:posts,post_slug,'.$id,
            'post_content'      => 'required',
        ]);

        // You might prefer to use this one instead https://laravel.com/docs/5.4/queries#updates
        // You choose
        $post = Post::findOrFail($id);

        $post->author_ID        = $request->input('author_ID');
        $post->post_type        = $request->input('post_type');
        $post->post_title       = $request->input('post_title');
        $post->post_title2      = $request->input('post_title2');
        $post->post_title3      = $request->input('post_title3');
        $post->post_title4      = $request->input('post_title4');
        $post->post_title5      = $request->input('post_title5');
        $post->post_slug        = $request->input('post_slug');
        $post->post_content     = $request->input('post_content');
        $post->post_content2     = $request->input('post_content2');
        $post->post_content3     = $request->input('post_content3');
        $post->post_content4     = $request->input('post_content4');
        $post->post_content5     = $request->input('post_content5');
        $post->category_ID      = $request->input('category_ID');

        // Check if file is present
        if( $request->hasFile('post_thumbnail') ) {
            $post_thumbnail     = $request->file('post_thumbnail');
            $filename           = time() . '.' . $post_thumbnail->getClientOriginalExtension();

            Image::make($post_thumbnail)->resize(600, 600)->save( public_path('/uploads/' . $filename ) );

            // Set post-thumbnail url
            $post->post_thumbnail = $filename;
        }

        if( $request->hasFile('post_image') ) {
            $post_image     = $request->file('post_image');
            $filename           = time() . '.' . $post_image->getClientOriginalExtension();

            Image::make($post_image)->resize(600, 600)->save( public_path('uploads/' . $filename ) );

            // Set post-thumbnail url
            $post->post_image = $filename;
        }

        if( $request->hasFile('post_image2') ) {
            $post_image2     = $request->file('post_image2');
            $filename           = time() . '.' . $post_image2->getClientOriginalExtension();

            Image::make($post_image2)->resize(600, 600)->save( public_path('uploads/' . $filename ) );

            // Set post-thumbnail url
            $post->post_image2 = $filename;
        }

        if( $request->hasFile('post_image3') ) {
            $post_image3     = $request->file('post_image3');
            $filename           = time() . '.' . $post_image3->getClientOriginalExtension();

            Image::make($post_image3)->resize(600, 600)->save( public_path('uploads/' . $filename ) );

            // Set post-thumbnail url
            $post->post_image3 = $filename;
        }

        if( $request->hasFile('post_image4') ) {
            $post_image4     = $request->file('post_image4');
            $filename           = time() . '.' . $post_image4->getClientOriginalExtension();

            Image::make($post_image4)->resize(600, 600)->save( public_path('uploads/' . $filename ) );

            // Set post-thumbnail url
            $post->post_image4 = $filename;
        }

        if( $request->hasFile('post_image5') ) {
            $post_image5     = $request->file('post_image5');
            $filename           = time() . '.' . $post_image5->getClientOriginalExtension();

            Image::make($post_image5)->resize(600, 600)->save( public_path('uploads/' . $filename ) );

            // Set post-thumbnail url
            $post->post_image5 = $filename;
        }

        $post->save();

        Session::flash('success', 'Post updated.');

        return redirect()->route('posts.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Retrieve records and throw an exception if a model is not found
        $post = Post::findOrFail( $id );

        // https://laravel.com/docs/5.4/queries#deletes
        $post->delete();

        Session::flash('success', 'Post deleted.');

        return redirect()->route('posts.index');
    }
}
