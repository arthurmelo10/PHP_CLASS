<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function listAllCategories(Category $category) 
    {
        $categories = Category::all();
    
        return view('posts.index', [
            'posts' => $category->posts,
            'currentCategory' => $category,
            'categories' => $categories
        ]);
    }
}
