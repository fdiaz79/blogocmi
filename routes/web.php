<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [BlogController::class, 'index']);

Route::get('/blog/{blogId}', [BlogController::class, 'show']);

Route::get('/edit/{blogId}', [BlogController::class, 'showEdit'])->middleware('auth');

Route::get('/createBlog', [BlogController::class, 'create'])->middleware('auth');

Route::post('/createBlog', [BlogController::class, 'store'])->middleware('auth');

Route::put('/edit/{blogId}', [BlogController::class, 'update'])->middleware('auth');

Route::delete('/blog/{blogId}', [BlogController::class, 'destroy'])->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
