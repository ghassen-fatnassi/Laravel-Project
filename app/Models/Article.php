<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
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
        return $this->belongsTo(User::class, 'author_id');
    }
}
