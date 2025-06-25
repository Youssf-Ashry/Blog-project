<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) // Route Model Binding
    {
        // Ensure the post exists
        if (!$post) {
            abort(404, 'Post not found');
        }

        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = new Post($request->all());
        $post->user_id = Auth::id(); // Get the authenticated user's ID
        $post->save();

        return redirect()->route('home');
    }
}