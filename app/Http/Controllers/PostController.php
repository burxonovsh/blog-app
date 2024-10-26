<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;


class PostController extends Controller
{
    public function index(){
        $posts=Post::all();
        return view('blog.index', compact('posts'));
    }

    public function allposts(){
        $posts = Post::all();
        return view('blog.all-posts', compact('posts'));
    }

    public function create(){
        return view('blog.create-post');
    }
    public function edit(){
        return view('blog.edit-post');
    }
    public function show(){
        return view('blog.show-post');
    }
    public function index_without_login(){
        return view('blog.index-without-login');
    }
    public function store(PostRequest $request){
        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'user_id' => $auth->user()->id,
        ]);

    }
}
