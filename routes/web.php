<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/home', [
        'active' => 'Home',
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('pages/about', [
        'active' => 'About',
        'title' => 'About',
        'name' => 'Takemichy',
        'email' => 'takemichy@toman.jpn',
    ]);
});

Route::get('/blog/post/{post:slug}', [PostController::class, 'detail']);

Route::get('/blog', [PostController::class, 'index']);


// Route::get('/c/{category:slug}', function (Category $category) {
//     return view('pages/blog', [
//         'active' => 'Category',
//         'title' => "Post Category : $category->name",
//         // 'post' => Post::where('category_id', $category) ->get(),
//         'articles' => $category->posts->load(['author', 'category']),
//     ]);
// });

// Route::get('/author/{author:username}', function (User $author) {
//     return view('pages/blog', [
//         'active' => 'Blog',
//         'title' => "Author by : $author->name",
//         'articles' => $author->posts->load(['author', 'category']),
//     ]);
// });