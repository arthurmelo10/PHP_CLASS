<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index(): View|Factory
    {
        /**
         * can and cannot method always will return a boolean
         * authorize method will return a 403 status code
         * $this->authorize('admin');
        */

        $posts = Post::latest()->filter(
            request(['search', 'category', 'author'])
            )->paginate(3)->withQueryString();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post): View|Factory
    {
        return view('posts.show',
        [
            'post'=> $post
        ]);
    }
}
