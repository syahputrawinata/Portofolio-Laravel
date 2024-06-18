<?php

use App\Http\Controllers\PageController;
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

Route::get('/home', [PageController::class, 'home']);

Route::get('/home/about', [PageController::class, 'about']);

Route::get('/home/portofolio', [PageController::class, 'portofolio']);

Route::get('/home/contact', [PageController::class, 'contact']);
