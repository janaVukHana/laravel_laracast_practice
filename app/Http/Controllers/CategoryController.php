<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category) {
        // dd($category->posts);

        $posts = $category->posts;
        $categorys = Category::all();
        $currentCategory = $category;

        return view('posts.index', compact('posts', 'categorys', 'currentCategory'));
    }
}
