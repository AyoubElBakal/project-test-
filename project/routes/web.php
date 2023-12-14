<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/clients', [ClientController::class, 'index'])->name('pages.clients');
Route::get('/categories', [CategoryController::class, 'index'])->name('pages.categories');
Route::resource('products', ProductController::class);


