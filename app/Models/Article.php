<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Usamamuneerchaudhary\Commentify\Traits\Commentable;


class Article extends Model
{
    use HasFactory;
    use Commentable;
    protected $fillable=[
        'category',
        'title',
        'description',
        'body',
        'image',
        'author_id',
        'likes',
        'comments', 
        'bookmarks',
    ];
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function article_views()
    {
        return $this->hasMany(ArticleView::class);
    }
    public function bookmark()
    {
        return $this->hasMany(bookmark::class);
    }
}