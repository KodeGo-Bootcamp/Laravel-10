<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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

        \App\Models\Post::create($data);

        // $post = new \App\Models\Post();
        // $post->caption = $data['caption'];
        // $post->save();

        // Storage link path for public folder (5/15/2023 : 8:12PM)

        // Solved using public_path helper
        // $imagePath = request('image')->store(public_path('uploads'),'public');
        $imagePath = request('image')->store('uploads', 'public');

        // For us to be able to access the image path (8:17pm)

        auth()->user()->posts()->create($data);


        // auth()->user()->posts()->create([
        //     'caption' => $data['caption'],
        //     'image' => $imagePath,
        // ]);

        // // Redirection to a different routes (8:17pm)
        // return redirect('/profile/'.auth()->user()->id);

        dd(request()->all());
    }
}
