<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public static function index() {
        return view('posts.index')
            ->with([
                'posts' => Post::with('tags')->get(),
            ]);
    }
}
