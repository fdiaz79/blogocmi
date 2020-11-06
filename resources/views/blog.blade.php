@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card border-danger mb-3" >
            <div class="card-header"> <h1 class="title text-center mb-3 blogTitle">@php echo strtoupper($blog->title); @endphp </h1></div>
                <div class="card-body">

                    <p class="card-text"><pre class="blogBody">{{ $blog->content }} </pre></p>
                </div>
                <div class="card-footer text-right">
                    @auth
                        @if (Auth::user()->name == $blog->author)
                            <div class="row">
                                <div class="col-2 pt-2">
                                    <form action="/blog/{{$blog->id}}" method="POST">
                                        @csrf
                                        {{-- FAKES THE DELETE REQUEST --}}
                                        @method('delete')
                                        <button type="submit" class="btn btn-primary btn-sm btn-block" onclick="return confirm('Are you sure tou want to delete this blog?')">Delete this Blog</button>
                                    </form>
                                </div>
                                <div class="col-2 pt-2">
                                    <form action="/edit/{{$blog->id}}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-sm btn-block">Edit this Blog</button>
                                    </form>
                                </div>
                                <div class="col-8">
                                    <h5 class="text-right smallText"><strong>Author:</strong> {{ $blog->author }}</h5>
                                    <h5 class="text-right smallText"> @php echo date("F, j, Y, g:i a", strtotime($blog->created_at)) @endphp </h5>
                                </div>
                            </div>
                        @else
                            <h5 class="text-right smallText"><strong>Author:</strong> {{ $blog->author }}</h5>
                            <h5 class="text-right smallText"> @php echo date("F, j, Y, g:i a", strtotime($blog->created_at)) @endphp </h5>
                        @endif
                    @else
                        <h5 class="text-right smallText"><strong>Author:</strong> {{ $blog->author }}</h5>
                        <h5 class="text-right smallText"> @php echo date("F, j, Y, g:i a", strtotime($blog->created_at)) @endphp </h5>
                    @endauth
                </div>
            </div>
        </div>

    </div>

@endsection
