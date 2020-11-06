@extends('layouts.app')
@section('content')

    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">OCMI BLOGS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                @if (Route::has('login'))
                    <div class="text-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

            </form>
        </div>
    </nav> --}}



    <div class="container">
        <h1 class="title text-center mb-3">
            BLOG LIST
        </h1>

        @if(session('mssg'))
            <div class="alert alert-dismissible alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong> {{ session('mssg') }}</strong>
            </div>
        @endif

        @foreach($blogs as $blog)
            <div class="card border-danger mb-3" >
            <div class="card-header">Blog from {{ $blog->created_at }} - by {{ $blog->author }}</div>
                <div class="card-body">
                    <h4 class="card-title">{{ $blog->title }}</h4>
                    <p class="card-text"><pre class="blogBody">{{ $blog->preview }}... </pre></p>
                    <a href="/blog/@php echo $blog->id; @endphp" class="readMore"> Read more...</a>
                </div>
                <div class="card-footer text-right">
                    <strong>Tags:</strong>
                    @foreach( $blog->tags as $tag)
                        <span class="badge badge-primary">{{$tag}} </span>
                    @endforeach
                </div>
            </div>
        @endforeach
        @auth
            <a href="/createBlog">Add a new blog</a>
        @endauth
    </div>


@endsection
