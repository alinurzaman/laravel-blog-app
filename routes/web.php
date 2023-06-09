<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhamad Ali Nur Zaman",
        "active" => 'about',
        "email" => "muhamadalinurzaman@gmail.com",
        "image" => "muhamadalinurzaman.jpg",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

// Route::get('categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post by Category: $category->name",
//         "active" => 'categories',
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });
// Route::get('authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post by Author: $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });
