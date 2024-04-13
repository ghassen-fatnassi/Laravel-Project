<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Bookmark;
use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Log;

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
        $user_id = auth()->id();

        $existing_bookmark = Bookmark::where('user_id', $user_id)
                            ->where('article_id', $article->id)
                            ->first();

        if ($existing_bookmark) {
            
            $existing_bookmark->delete();
            $article->decrement('bookmarks');
            session()->flash('bookmark_status', 'unbookmarked');
        } else {
            $bookmark = new Bookmark();
            $bookmark->article_id = $article->id;
            $bookmark->user_id = $user_id;
            $bookmark->save();
            $article->increment('bookmarks');
            session()->flash('bookmark_status', 'bookmarked');
        }
        return redirect()->back()->with('bookmark_status', session('bookmark_status'));
        
    }

    public function like(Article $article)
    {
        $user_id = auth()->id();

        $existing_like = Like::where('user_id', $user_id)
                            ->where('article_id', $article->id)
                            ->first();

        if ($existing_like) {
            
            $existing_like->delete();
            $article->decrement('likes');
            session()->flash('like_status', 'unliked');
        } else {
            $like = new Like();
            $like->article_id = $article->id;
            $like->user_id = $user_id;
            $like->save();
            $article->increment('likes');
            session()->flash('like_status', 'liked');
        }
        return redirect()->back()->with('like_status', session('like_status'));
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
        $article->body = $request->body;
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
