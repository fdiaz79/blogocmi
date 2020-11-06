<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    //naming index is an convention when the route is /
    public function index() {

        // $blogs = Blog::all();
        //$blogs = Blog::where('tag1', 'rock')->get();
        $blogs = Blog::latest()->get();
        return view('index', ['blogs' => $blogs] );
    }

    public function show($blogId) {

        $blog = Blog::find($blogId);

        return view('blog', ['blog' => $blog]);
    }

    public function showEdit($blogId) {
        $blog = Blog::find($blogId);

        return view('edit', ['blog' => $blog]);
    }

    public function create() {
        return view('createBlog');
    }

    public function store() {
        // error_log (request('author'));

        //create new instance of the Blog model
        $blog = new Blog();
        $blog->author = request('author');
        $blog->title = request('title');
        $blog->content = request('content');
        $blog->preview = substr(request('content'), 0, 250);
        $blog->tags = explode(" ", request('tags'));
        // return($blog->tags);
        // error_log($blog->tags);
        $blog->save();

        return redirect('/')->with('mssg', 'Your blog has been added!');
    }

    public function update($blogId) {

        $blog = Blog::findOrfail($blogId);
        $blog->update([
            'author'=> request('author'),
            'title'=> request('title'),
            'content'=> request('content'),
            'preview'=> substr(request('content'), 0, 250),
            'tags'=> explode(" ", request('tags')),

        ]);
        // error_log(json_encode($blog));

        return redirect('/')->with('mssg', 'The Blog has been successfully edited');
    }

    public function destroy($blogId) {
        // error_log($blogId);
        $blog = Blog::findOrFail($blogId);
        $blog->delete();
        return redirect('/')->with('mssg', 'The Blog has been successfully deleted');
    }
}
