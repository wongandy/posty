<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        
        return view('posts.index', compact('posts'));
    }

    public function store(StorePostRequest $request)
    {
        auth()->user()->posts()->create([
            'body' => $request->body
        ]);

        return redirect()->route('posts');
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return redirect()->route('posts');
    }
}
