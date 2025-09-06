<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function add() {
        return view('add-post');
    }
    function store(Request $request) {
        $title = $request->title;
        $description = $request->description;

        Post::create([
            'title' =>$title,
            'description' =>$description,
        ]);

        // return back();
        return redirect()->route('all.post');
    }
    function allPost() {
        $posts = Post::all();
        return view('all-posts', compact('posts'));
    }
}
