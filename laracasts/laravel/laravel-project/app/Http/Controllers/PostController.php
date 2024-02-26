<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function index(): View|Factory
    {
        $posts = Post::latest()->filter(
            request(['search', 'category', 'author'])
            )->paginate(3)->withQueryString();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function create(): View|Factory
    {    
        return view('posts.create');
    }

    public function show(Post $post): View|Factory
    {
        return view('posts.show',
        [
            'post'=> $post
        ]);
    }
}
