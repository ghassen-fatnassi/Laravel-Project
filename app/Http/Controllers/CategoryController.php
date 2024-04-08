<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($category)
    {
        // Retrieve articles based on the category
        $articles = Article::where('category', $category)->get();
        $articleslikes = Article::where('category', $category)->orderBy('likes', 'desc')->take(5)->get();
        // Pass the articles and category to the view
        return view('category', compact('articles','articleslikes', 'category'));
        
    }
}
