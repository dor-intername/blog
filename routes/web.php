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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/posts/',[\App\Http\Controllers\PostController::class,'store']);
Route::get('/post/create',[\App\Http\Controllers\PostController::class,'create']);
Route::get('/post/{post}',[\App\Http\Controllers\PostController::class,'index'])->name('post');
Route::get('/post/{id}/update',[\App\Http\Controllers\PostController::class,'edit']);
Route::put('/post/{post}/update',[\App\Http\Controllers\PostController::class,'update']);
Route::patch('/post/{post}/update',[\App\Http\Controllers\PostController::class,'update']);
Route::delete('/post/{post}/delete',[\App\Http\Controllers\PostController::class,'destroy']);
