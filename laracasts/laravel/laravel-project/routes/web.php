<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

Route::get('/', function () {
    // dd(request('search'));

    $posts = Post::latest();

    if (request('search')) {
        // search the database
        $posts
            ->where('title', 'like', '%' . request('search') . '%')
            ->orwhere('body', 'like', '%' . request('search') . '%');
    }

    $categories = Category::all();
    
    return view('posts',[
        'posts' => $posts->get(),
        'categories' => $categories
    ]);
})->name('home');

Route::get('posts/{post}', function (Post $post) { //Post::where('slug', $post)->firstorFail()

    return view('post',
        [
            'post'=> $post
        ]
    );
});


Route::get('categories/{category}', function (Category $category) {

    $categories = Category::all();

    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => $categories
    ]);
})->name('category');

Route::get('authors/{author}', function (User $author) {

    return view('posts', [
        'posts' => $author->posts
    ]);
});
