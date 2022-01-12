<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('pages/blog', [
            'title' => 'All Blogs',
            'articles' => Post::with(['author', 'category'])-> latest()->get()
        ]);
    }

    public function detail(Post $post)
    {
        return view('pages/post', [
            'title' => 'Blog Details',
            'article' => $post
        ]);
    }
}