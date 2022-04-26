<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_user');
    }

    public function index()
    {
        return view('user/home');
    }
    public function post()
    {
        return view('user/home');
    }
    public function user()
    {
        // $post = DB::select('SELECT P.title, 
        // P.topic,
        // U.name, 
        // U.last_name, 
        // U.email 
        // FROM `post` P,
        // `users` U 
        // WHERE P.user_id = $id
        // AND P.user_id = U.id');
        // return view('user/home', ['post' => $post]);
        // return view('user/home');
        // $post = DB::select('select * from post');
        // return view('user/home', ['post' => $post]);
    }
    public function profile()
    {
        return view('user/profile');
    }
    public function create()
    {
        $category = DB::select('select * from category');
        return view('user/create', ['category' => $category]);
        // return view('user/create');
    }

    
}
