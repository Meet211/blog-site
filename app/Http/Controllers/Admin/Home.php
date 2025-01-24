<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $blogs = Blog::all()->toArray();
        return view('admin.home', ['blogs' => $blogs]);
    }
}
