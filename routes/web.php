<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfilesController;

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

Auth::routes();


Route::get('/', [PostController::class, 'show'])->name('home');


Route::post('/posts/', [PostController::class, 'store'])->name('post.store');
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
Route::get('/post/{post:id}', [PostController::class, 'index'])->name('post');


Route::middleware(['can:update,post'])->group(function () {
    Route::get('/post/{post:id}/edit', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/post/{post:id}/update', [PostController::class, 'update'])->name('post.update');
    Route::delete('/post/{post:id}/delete', [PostController::class, 'destroy'])->name('post.destory');

//Route::get('/post/{post:slug}',[PostController::class,'index'])->name('post');
});


Route::post('/category', [CategoryController::class, 'store'])->name('category.show');

Route::middleware('user.administrator')->group(function () {
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{category:id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{category:id}/update', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{category}/delete', [CategoryController::class, 'destroy'])->name('category.destory');
});
Route::get('/category/{category:id}', [CategoryController::class, 'show'])->name('category');



Route::get('/profile/{user:id}', [ProfilesController::class, 'show'])->name('profile.show');


Route::middleware('can:selfUser,user')->group(function () {
    Route::get('/profile/{user:id}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{user:id}/update', [ProfilesController::class, 'update'])->name('profile.update');
});

Route::post('/profile/{user:id}/follow', [ProfilesController::class, 'follow'])->name('profile.follow');
