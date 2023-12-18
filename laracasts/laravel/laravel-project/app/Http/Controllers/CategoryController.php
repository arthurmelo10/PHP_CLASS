<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listAllCategories(Category $category) 
    {
        $categories = Category::all();
    
        return view('posts', [
            'posts' => $category->posts,
            'currentCategory' => $category,
            'categories' => $categories
        ]);
    }
}
