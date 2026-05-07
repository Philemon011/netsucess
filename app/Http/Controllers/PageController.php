<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class PageController extends Controller
{
    public function home()
    {
        $recentPosts = Post::published()
            ->with('category')
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('home', compact('recentPosts'));
    }
}