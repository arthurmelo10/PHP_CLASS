<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;

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

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail') ? request()->file('thumbnail')->store() : null;

        Post::create($attributes);

        return redirect('/')
            ->with('success', 'Your post has been submmited');
    }
}
