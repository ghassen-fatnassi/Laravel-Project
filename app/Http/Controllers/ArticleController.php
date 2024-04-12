<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\bookmark;
use App\Models\Like;
class ArticleController extends Controller
{
    public function show(Article $article)
    {
        return view('singlearticle',compact('article'));
    }
    public function bookmark(Article $article)
{
    $user = auth()->user();
    $bookmark = bookmark::where('user_id', $user->id)
                        ->where('article_id', $article->id)
                        ->first();

    if (!$bookmark) {
        // clicking once
        $article->increment('bookmarks');
        bookmark::create([
            'user_id' => $user->id,
            'article_id' => $article->id,
        ]);
        return response()->json(['message' => 'Article bookmarked successfully']);
    } else {
        //clicking again
        $article->decrement('bookmarks');
        $bookmark->delete();
        return response()->json(['message' => 'Bookmark removed']);
    }
}
public function like(Article $article)
{
    $user = auth()->user();
    $like = Like::where('user_id', $user->id)
                ->where('article_id', $article->id)
                ->first();

    if (!$like) {
        // If no existing like found, create a new like
        $article->increment('likes');
        Like::create([
            'user_id' => $user->id,
            'article_id' => $article->id,
        ]);
        return response()->json(['message' => 'Article liked successfully']);
    } else {
        // If like already exists, decrement 'likes' count and delete like entry
        $article->decrement('likes');
        $like->delete();
        return response()->json(['message' => 'Like removed']);
    }
}
}