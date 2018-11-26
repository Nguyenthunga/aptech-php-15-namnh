<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
        ]);
        $post->categories()->attach($request->category);

        return redirect()->route('posts.show', $post->id);
    }

    public function show($id)
    {
        $post = Post::with('categories')->find($id);
        return view('posts.show', ['post' => $post]);
    }

}
