<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['cors']], function() {
    Route::controller(ProductController::class)->group(function () {
        Route::get('products', 'list');
        Route::post('products', 'create');
        Route::put('products/{id}', 'update');
    });
});
