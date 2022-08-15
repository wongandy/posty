<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index(User $user)
    {
        $posts = $user->posts()->paginate(5);
        
        return view('users.posts.index', compact('posts', 'user'));
    }
}
