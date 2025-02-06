<?php

use Illuminate\Support\Facades\Route;

// OLD
//Route::get('/', function () {
//    return view('welcome');
//})->middleware(['verify.shopify'])->name('home');

Route::prefix('/')->group(base_path('routes/api.php'));

//require __DIR__ . '/auth.php';
