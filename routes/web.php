<?php

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

Auth::routes();
Route::get('/dor/{id}',function($stam){
    return \App\Models\User::find($stam)->posts;
});
Route::get('/', [App\Http\Controllers\PostController::class, 'show'])->name('home');

Route::post('/posts/',[\App\Http\Controllers\PostController::class,'store'])->name('post.store');
Route::get('/post/create',[\App\Http\Controllers\PostController::class,'create'])->name('post.create');
Route::get('/post/{post}',[\App\Http\Controllers\PostController::class,'index'])->name('post');
Route::get('/post/{id}/edit',[\App\Http\Controllers\PostController::class,'edit'])->name('post.edit');
////Route::get('/post/{post:slug}',[\App\Http\Controllers\PostController::class,'index'])->name('post');
Route::put('/post/{post}/update',[\App\Http\Controllers\PostController::class,'update'])->name('post.update');
Route::delete('/post/{post}/delete',[\App\Http\Controllers\PostController::class,'destroy'])->name('post.destory');

Route::post('/category', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.create');
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.store');
Route::get('/category/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category');
Route::get('/category/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{category}/delete',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('category.destory');

