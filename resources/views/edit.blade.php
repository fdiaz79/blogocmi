@extends('layouts.app')

@section('content')
    @php
        $tagsString = implode(" ", $blog->tags);
    @endphp

    <div class="container">
        <h1 class="title text-center mb-3">
            EDIT BLOG
        </h1>

    <form action="/edit/{{$blog->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label class="col-form-label" for="author">Author Name:</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ $blog->author }}">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="title">Blog Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
            </div>
            <div class="form-group">
                <label for="content">Please insert your text here </label>
                <textarea class="form-control" id="content" cols="100" rows="10" name="content">{{ $blog->content }}</textarea>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="tags">Tags:</label>
            <input type="text" class="form-control" value="{{$tagsString}}" id="tags" name="tags">
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Edit Blog</button>
        </form>

    </div>
@endsection
