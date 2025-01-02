<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']); // Fixed: Added title variable
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page']); // Fixed: Added title variable
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']); // Fixed: Added title variable
});


