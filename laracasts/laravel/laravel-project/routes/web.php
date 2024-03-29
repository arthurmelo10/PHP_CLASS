<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('categories/{category}', [CategoryController::class , 'listAllCategories'])->name('category');

Route::get('authors/{author}', [UserController::class, 'getAuthor']);

// Registration
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware(('guest'));

// Login
Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');

//NewsLetter
Route::post('newsletter',[NewsletterController::class, 'addMember']);

//Admin Section
Route::middleware('can:admin')->group(function() {
    Route::get('admin/posts', [AdminController::class, 'index']);
    Route::post('admin/posts', [AdminController::class, 'store']);
    Route::get('admin/posts/create', [AdminController::class, 'create']);
    Route::get('admin/posts/{post:id}/edit', [AdminController::class, 'edit']);
    Route::patch('admin/posts/{post:id}', [AdminController::class, 'update']);
    Route::delete('admin/posts/{post:id}', [AdminController::class, 'destroy']);
});
