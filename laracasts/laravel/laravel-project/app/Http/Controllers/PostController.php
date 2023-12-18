<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function index(): View|Factory
    {
        $posts = Post::latest()->filter(request(['search']))->get();
        $categories = Category::all();

        return view('posts', [
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function show(Post $post) 
    {
        return view('post',
        [
            'post'=> $post
        ]);
    }
}
