<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'featured_image',
        'excerpt',
        'content',
        'meta_title',
        'meta_description',
        'status',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Un article appartient à une catégorie
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Scope : uniquement les articles publiés
    // public function scopePublished($query)
    // {
    //     return $query->where('status', 'published')
    //                  ->whereNotNull('published_at')
    //                  ->where('published_at', '<=', now());
    // }

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
            ->whereDate('published_at', '<=', now());
    }
}
