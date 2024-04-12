<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($category)
    {
        
        $articles = Article::where('category', $category)->get();

        $articleslikes = Article::where('category', $category)->orderBy('likes', 'desc')->take(5)->get();
        foreach ($articles as $article) {
            $article->formattedDate = Carbon::parse($article->created_at)->format('d F Y');
        }
        // Pass the articles and category to the view
        return view('category', compact('articleslikes', 'category','articles'));
             
    }

}