<?php

namespace App\Http\Controllers;

use App\Models\Post;

class RendererController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('render', compact('posts'));
    }
}
