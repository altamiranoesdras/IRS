<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(Request $request)
    {
        if(isset($request->user)){
            $posts = Post::delUSer($request->user)->simplePaginate(10);
        }else{

            $posts = Post::simplePaginate(10);
        }

        return view('posts.index',compact('posts'));

    }
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    public function new()
    {

        dd('create post');
        return view('posts.create_edit');
    }
}
