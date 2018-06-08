
<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} @yield('title')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

        @yield('stylesheet')
    </head>
    <body>

        <div class="blog-masthead">
            <div class="container">
                <nav class="blog-nav">
                    <ul class="nav navbar-nav">
                        <li><a class="blog-nav-item {{ null == Request::query() ? 'active' : '' }}" href="/adminpanel">Home</a></li>
                        {{-- <!-- <li><a class="blog-nav-item {{ Request::is('articles') ? 'active' : '' }}" href="/articles">Articles</a></li> --> --}}

                        @if( Helper::get_pages() )
                            @foreach( Helper::get_pages() as $page )
                                <li><a class="blog-nav-item {{ $page->id == Request::query('page_id') ? 'active' : '' }}" href="/?page_id={{ $page->id }}">{{ $page->post_title }}</a></li>
                            @endforeach
                        @endif
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a class="blog-nav-item {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a></li>
                            <li><a class="blog-nav-item {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a></li>

                        @else

                            <li class="dropdown">
                                <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('posts.index') }}">All pages</a></li>
                                    <li><a href="{{ route('posts.create') }}">Add New</a></li>
                                    {{--<!-- <li><a href="{{ route('categories.index') }}">Categories</a></li> -->

                                    <li><hr/></li>

                                    <!-- <li><a href="{{ route('pages.index') }}">All Pages</a></li>
                                    <li><a href="{{ route('pages.create') }}">Add New</a></li> -->

                                    <li><hr/></li>

                                    <!-- <li><a href="{{ route('comments.index') }}">All Comments</a></li> --> --}}

                                    <li><hr/></li>

                                    <li>
                                        <a class="blog-nav-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        @if( Session::has('success') )
                            <div class="mt-5 alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                    </div>
                </div>
            </div>
