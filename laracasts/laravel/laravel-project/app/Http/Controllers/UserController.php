<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAuthor(User $author) 
    {
        return view('posts', [
            'posts' => $author->posts
        ]);
    }
}
