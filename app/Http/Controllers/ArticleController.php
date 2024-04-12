<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleView;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Authenticated;


class ArticleController extends Controller
{
<<<<<<< HEAD
    public function show(Article $article,Authenticated $event)
    {   
        $user=$event->user;
        $article_view=new ArticleView;
        $article_view->article_id=$article->id;
        $article_view->viewer_id=$user->id;

        $relatedArticles = Article::where('author_id', $article->author_id)
        ->where('id', '!=', $article->id)
        ->inRandomOrder()
        ->take(3)
        ->get();
        return view('singlearticle', compact('article', 'relatedArticles'));
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
=======
    public function show(Article $article)
    {

        $relatedArticles = Article::where('author_id', $article->author_id)
            ->where('id', '!=', $article->id)
            ->inRandomOrder()
            ->take(3)
            ->get();
        return view('singlearticle', compact('article', 'relatedArticles'));
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
>>>>>>> f624fc138d2313d9465e14eb2fe1ac32eba927e4
