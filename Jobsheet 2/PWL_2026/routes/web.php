<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', function () {
    return 'Hello World';
});


Route::get('/world', function () {
    return 'World';
});

// Route::get('/', function () {
//  return 'Selamat Datang';
// });

Route::get('/about', function () {
    return 'NIM : 244107020207   '
        . '   Nama : Adam Bahy Maulana';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama Saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

// Route::get('/articles/{id}', function
// ($id) {
//  return "Halaman Artikel ke-".$id;
// });

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

Route::get('/hello', action: [WelcomeController::class, 'hello']);
Route::get('/greeting', action: [WelcomeController::class, 'greeting']);
Route::get('/', action: [HomeController::class, 'index']);
Route::get('/about', action: [AboutController::class, 'index']);
Route::get('/articles/{id}', action: [ArticleController::class, 'index']);

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);

// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Andi']);
// });

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Andi']);
// });
