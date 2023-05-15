<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    // Authentication for Protecting some routes inside of that post controllers

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        // $post = new \App\Models\Post();
        // $post->caption = $data['caption'];
        // $post->save();

        dd(request('image')->store('uploads','public'));

        auth()->user()->posts()->create($data);

        // \App\Models\Post::create($data);

        dd(request()->all());
    }
}
