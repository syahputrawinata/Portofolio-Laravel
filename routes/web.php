<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "HELLO WORLD";
});

// Route::get('halo', function () {
//     return "halo, aku sedang belajar routing di laravel";
// });

Route::get('about', function () {
    return view('about');
});

Route::get('home', function () {
    return view('home');
});

Route::get('portofolio', function(){
    return view('portofolio');
});

Route::get('contact', function(){
    return view('contact');
});