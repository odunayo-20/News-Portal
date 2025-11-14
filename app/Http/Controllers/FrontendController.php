<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $aboutPosts =  Post::where('status', 'published')->latest()->take(4)->get();
         $postTags = PostTag::get();
         $featuredPostsItem1 = Post::where('status', 'published')->where('is_featured', true)->latest()->take(3)->get();
         $featuredPostsItem2 = Post::where('status', 'published')->where('is_featured', true)->latest()->skip(3)->take(3)->get();
         $latestPostsItem1 = Post::where('status', 'published')->latest()->take(3)->get();
         $latestPostsItem2 = Post::where('status', 'published')->latest()->skip(3)->take(3)->get();
        return view('frontend.index', compact('aboutPosts', 'postTags', 'latestPostsItem1', 'latestPostsItem2', 'featuredPostsItem1', 'featuredPostsItem2'));
    }

    public function Post()
    {
        return view('frontend.posts.index');
    }

    public function showPost()
    {
        return view('frontend.posts.show');
    }
}
