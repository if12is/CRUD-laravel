<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('posts', [PostController::class, 'index'])->name('posts');
// Route::get('post/create', [PostController::class, 'create'])->name('post.create');
// Route::post('post/insert', [PostController::class, 'insert'])->name('post.insert');
// Route::get('post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
// Route::post('post/update/{id}', [PostController::class, 'update'])->name('post.update');
// Route::get('post/delete', [PostController::class, 'delete']);

Route::controller(PostController::class)->group(function () {
    Route::get('posts', 'index')->name('posts');
    Route::get('post/create', 'create')->name('post.create');
    Route::post('post/insert', 'insert')->name('post.insert');
    Route::get('post/edit/{id}', 'edit')->name('post.edit');
    Route::post('post/update/{id}', 'update')->name('post.update');
    Route::get('post/delete/{id}', 'delete')->name('post.delete');
    Route::get('posts/delete/all', 'deleteAll')->name('post.delete.all');
});
