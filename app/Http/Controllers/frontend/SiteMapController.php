<?php

namespace App\Http\Controllers\frontend;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteMapController extends Controller
{
    public function htmlSitemap()
{
    $posts = Post::where('status', 'published')->latest()->get();
    $categories = Category::all();

    return view('frontend.sitemap-html', compact('posts', 'categories'));
}


 public function index()
    {
        $posts = Post::where('status', 'published')->latest()->get();
        $categories = Category::all();

        $content = view('frontend.sitemap-xml', compact('posts', 'categories'));

        return response($content, 200)
                ->header('Content-Type', 'application/xml');
    }


    
}
