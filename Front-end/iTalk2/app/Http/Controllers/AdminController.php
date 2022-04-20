<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    
    public function index()
    {
        return view('admin/dashboard');
    }
    public function post()
    {
        return view('admin/post');
    }
    public function user()
    {
        return view('admin/post');
    }
}
