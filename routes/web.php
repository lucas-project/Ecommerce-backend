<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::redirect('/', '/products'); // Redirect to products index page
Route::resource('products', ProductController::class);
Route::get('/search', [ProductController::class, 'search'])->name('products.search');