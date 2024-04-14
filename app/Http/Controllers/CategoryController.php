<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function show($category)
    {
        $user = Auth::user();
        $articles = Article::where('category', $category)
                    ->orderBy('created_at', 'desc') // Sort by created_at field in descending order
                    ->get();


        $articleslikes = Article::where('category', $category)->orderBy('likes', 'desc')->take(5)->get();
        foreach ($articles as $article) {
            $article->formattedDate = Carbon::parse($article->created_at)->format('d F Y');
        }
        // Pass the articles and category to the view
        return view('category', compact('articleslikes', 'category','articles','user'));
             
    }

}