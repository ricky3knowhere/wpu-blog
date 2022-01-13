<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('pages/blog', [
            'active' => 'Blog',
            'title' => 'All Blogs',
            'articles' => Post::latest()->get()
        ]);
    }

    public function detail(Post $post)
    {
        return view('pages/post', [
            'active' => 'Blog',
            'title' => 'Blog Details',
            'article' => $post
        ]);
    }
}