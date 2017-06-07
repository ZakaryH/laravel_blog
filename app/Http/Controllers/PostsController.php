<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
//        when we put it in the construct it applies to everything in the controller, so we give it some exception
        $this->middleware('auth')->except(['index', 'show']);
    }

    //
    public function index() {

        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.index', compact('posts', 'archives'));
    }

    public function show(Post $post) {
//        route model binding method, matches the route wildcard for matching the var name
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {

//        dd(request(['title', 'body']));
//        create a new post using the request data
//        $post = new Post;
//
//        $post->title = request('title');
//        $post->body = request('body');
//
////        save it to the db
//        $post->save();

//        Post::create([
//            'title' => request('title'),
//            'body' => request('body')
//        ]);

        $this->validate( request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

//        redirext to home page?
        return redirect('/');
    }
}
