<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::with('category')->take(2)->get();
return $posts;
        return view('index', ['posts' => $posts]);
    }
}
