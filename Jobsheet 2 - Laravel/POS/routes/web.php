<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', action: [HomeController::class, 'index']);
Route::get('/category/food-beverage', action: [ProductsController::class, 'food']);
Route::get('/category/beauty-health', action: [ProductsController::class, 'health']);
Route::get('/category/home-care', action: [ProductsController::class, 'home']);
Route::get('/category/baby-kid', action: [ProductsController::class, 'baby']);
Route::get('/user/{id}/name/{name}', action: [UserController::class, 'index']);
Route::get('/payment', action: [PaymentController::class, 'index']);



