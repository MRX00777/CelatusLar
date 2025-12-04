<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;


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

Route::get('/', [MainController::class, 'index'])->name('main.index');



Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');



Route::get('/posts', [PostController::class, 'index'])->name('post.index');

Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts', [PostController::class, 'store'])->name('post.store');

Route::get('/posts/update', [PostController::class, 'update']);

Route::get('/posts/delete', [PostController::class, 'delete']);

Route::get('/posts/restore', [PostController::class, 'restore']);

Route::get('/posts/first-or-create', [PostController::class, 'firstOrCreate']);

Route::get('/posts/update-or-create', [PostController::class, 'updateOrCreate']);
