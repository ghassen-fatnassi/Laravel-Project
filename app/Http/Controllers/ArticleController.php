<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(Article $article)
    {

        $relatedArticles = Article::where('author_id', $article->author_id)
        ->where('id', '!=', $article->id)
        ->inRandomOrder()
        ->take(3)
        ->get();
        return view('singlearticle',compact('article','relatedArticles'));
    }

    public function destroy(Article $article)
    {
        // Delete the article
        $article->delete();
        // Redirect to a relevant page (e.g., articles index)
        return redirect()->route('home')->with('articleDeleted', true);
    }
}
