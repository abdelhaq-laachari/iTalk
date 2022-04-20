<?php

namespace App\Http\Controllers;

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
        return view('user/home');
    }
    public function profile()
    {
        return view('user/profile');
    }
    public function create()
    {
        return view('user/create');
    }
}
