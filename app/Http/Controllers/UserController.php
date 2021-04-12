<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($id)
    {
        $user_id = auth()->user()->id;
        $posts = Post::all()->where('user_id', $id);
        return view('posts.userpage', ['posts' => $posts, 'user_id' => $user_id]);
    }
}
