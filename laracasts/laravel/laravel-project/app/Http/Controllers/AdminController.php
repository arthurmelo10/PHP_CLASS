<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    /**
     *  Show all posts
     */
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }

    /**
     * Return the form to create a post
     */
    public function create(): View|Factory
    {    
        return view('admin.posts.create');
    }

    /**
     * Create a post into database
     */
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

    public function edit(Post $post)
    {
        return view('admin.posts.edit',[
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail') ? request()->file('thumbnail')->store() : null;
        }

        $post->update($attributes);

        return back()->with('success', 'Post Updated !');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()
            ->with('success', 'Post Deleted');
    }
}
