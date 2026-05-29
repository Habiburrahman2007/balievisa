<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Article extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'image',
        'content',
        'is_published',
        'published_at',
        'views',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    






    public function getImageUrlAttribute(): string
    {
        if (!$this->image) {
            return '/img/hero-bali-mobile.webp';
        }

        return URL::asset('storage/' . $this->image);
    }
}

