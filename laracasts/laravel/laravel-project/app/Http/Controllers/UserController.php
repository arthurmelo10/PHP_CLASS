<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function getAuthor(User $author) 
    {
        return view('posts', [
            'posts' => $author->posts
        ]);
    }
}
