@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="title text-center mb-3">
            ADD A NEW BLOG
        </h1>

        <form action="/createBlog" method="POST">
            @csrf
            <div class="form-group">
                <label class="col-form-label" for="author">Author Name:</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ Auth::user()->name }}">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="title">Blog Title:</label>
                <input type="text" class="form-control" placeholder="Title" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Please insert your text here </label>
                <textarea class="form-control" id="content" cols="100" rows="10" name="content"></textarea>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="tags">Tags:</label>
                <input type="text" class="form-control" placeholder="Please enter the tags separated by a space" id="tags" name="tags">
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Add New Blog</button>
        </form>



    </div>
@endsection
