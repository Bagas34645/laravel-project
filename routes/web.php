<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

Route::get('/',[HomepageController::class,'index']);
Route::get('products', [HomepageController::class, 'products']);
Route::get('products/{slug}', [HomepageController::class, 'single_product']);
Route::get('categories', [HomepageController::class, 'categories']);
Route::get('category/{slug}', [HomepageController::class, 'single_category']);
Route::get('cart', [HomepageController::class, 'cart']);
Route::get('checkout', [HomepageController::class, 'checkout']);
