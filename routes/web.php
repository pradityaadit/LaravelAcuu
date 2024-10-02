<?php

use illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page'],);
});


Route::get('/about', function () {
    return view('about',  ['title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
    $post = Post::find($slug); //INI BERKAITANNYA SAMA POST.PHP PADA MODELS DI FORLDER APP
    return view('post', ['title' => 'Blog Page', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
