<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() // Landing Page
    {
        $latestPosts = Post::latest()->take(3)->get();
        return view("welcome", compact("latestPosts"));
    }

    public function news() // All News Page
    {
        $posts = Post::latest()->paginate(9);
        return view("posts.index", compact("posts"));
    }

    public function guides()
    {
        $posts = Post::where("title", "like", "%Guide%")->latest()->paginate(9);
        return view("posts.index", compact("posts"));
    }

    public function patches()
    {
        $posts = Post::where("title", "like", "%Patch%")->latest()->paginate(9);
        return view("posts.index", compact("posts"));
    }

    public function old_index()
    {
        $posts = Post::latest()->paginate(12);
        return view('welcome', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
