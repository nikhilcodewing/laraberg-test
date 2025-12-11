<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['nullable', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ]);

        $post = Post::create([
            'title' => $data['title'] ?? 'Untitled',
            'content' => $data['content'],
        ]);

        return redirect()
            ->back()
            ->with('status', 'Saved Gutenberg content (ID ' . $post->id . ').');
    }
}

