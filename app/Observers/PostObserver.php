<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Artisan;

class PostObserver
{
    public function created(Post $post): void
    {
        if ($post->status === 'published') {
            Artisan::call('sitemap:generate');
        }
    }

    public function updated(Post $post): void
    {
        if ($post->status === 'published') {
            Artisan::call('sitemap:generate');
        }
    }

    public function deleted(Post $post): void
    {
        Artisan::call('sitemap:generate');
    }
}