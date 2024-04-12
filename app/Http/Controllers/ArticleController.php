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

        $relatedArticles = Article::where('author_id', $article->author_id)
            ->where('id', '!=', $article->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
        return view('singlearticle', compact('article', 'relatedArticles'));
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
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'body' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        ]);
        $article = new Article();
        $article->category = $request->category;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->body= $request->body;
        $article->author_id = auth()->user()->id;
        $article->likes = 0;
        $article->comments = 0;
        $article->bookmarks = 0;

        // Handle image upload
        if ($request->hasFile('image')) {
            $filename = $request->image->store('images', 'public');  // Stores the image in the 'storage/app/public/images' directory
            $article->image = $filename;
        }


        $article->save();
        return redirect()->route('home');
    }

    public function destroy(Article $article)
    {
        // Delete the article
        $article->delete();
        // Redirect to a relevant page (e.g., articles index)
        return redirect()->route('home')->with('articleDeleted', true);
    }
}
