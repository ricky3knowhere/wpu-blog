<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $title = request('category') ? 'at ' . Category::firstWhere('slug', request('category'))->name : (request('author') ? 'by ' . User::firstWhere('username', request('author'))->name : '');
        return view('pages/blog', [
            'active' => 'Blog',
            'title' => 'All Blogs ' . $title,
            'articles' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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