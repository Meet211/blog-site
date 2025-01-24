<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->orderBy('id','desc')->get()->toArray();
        return view('home', ['blogs' => $blogs]);
    }

    public function details($id)
    {
        $blog = Blog::findOrFail($id);
        // dd($blog);
        return view('blog-details', ['blog' => $blog]);
    }
}
