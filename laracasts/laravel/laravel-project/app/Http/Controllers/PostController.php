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
        $posts = Post::latest()->filter(request(['search', 'category', 'author']))->get();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post) 
    {
        return view('posts.show',
        [
            'post'=> $post
        ]);
    }
}
