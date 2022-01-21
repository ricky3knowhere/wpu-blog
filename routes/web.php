<?php

use App\Http\Controllers\AdminCategoriesController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\Logincontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

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

Route::get('/blog/all', [PostController::class, 'index']);
Route::get('/blog/filter', [PostController::class, 'index']);

Route::get('/login', [Logincontroller::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [Logincontroller::class, 'authenticate']);
Route::post('/logout', [Logincontroller::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', fn () => view('/dashboard/index'))->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/category', AdminCategoriesController::class)->except('show')->middleware('isAdmin');