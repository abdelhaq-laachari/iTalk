<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::latest()->with(['user', 'likes'])->get();

        return view('home' , [ 
            'posts' => $posts
        ]);
    }
}
