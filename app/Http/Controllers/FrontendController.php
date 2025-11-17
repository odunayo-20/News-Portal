<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTag;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $paginationTheme = 'bootstrap';


    public function index()
    {
        $aboutPostFirst =  Post::where('status', 'published')->latest()->take(1)->get();
        $aboutPosts =  Post::where('status', 'published')->latest()->take(4)->get();
         $postTags = PostTag::get();
         $featuredPostsItem1 = Post::where('status', 'published')->where('is_featured', true)->latest()->take(3)->get();
         $featuredPostsItem2 = Post::where('status', 'published')->where('is_featured', true)->latest()->skip(3)->take(3)->get();
         $latestPostsItem1 = Post::where('status', 'published')->latest()->take(3)->get();
         $latestPostsItem2 = Post::where('status', 'published')->latest()->skip(3)->take(3)->get();
        return view('frontend.index', compact('aboutPosts', 'postTags', 'latestPostsItem1', 'latestPostsItem2', 'featuredPostsItem1', 'featuredPostsItem2','aboutPostFirst'));
    }

    public function post()
    {
        return view('frontend.posts.index');
    }

    public function showPost($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

         $post->increment('views');

         
        $postTags = PostTag::get();
        $categories = Category::get();

        return view('frontend.posts.show', compact('post', 'postTags', 'categories'));
    }


      public function trend()
    {
         $featuredPosts = Post::where('status', 'published')->where('is_featured', true)->latest()->paginate(1);
        return view('frontend.trends.index', compact('featuredPosts'));
    }


    public function newsGrid()
    {
        $newsGrid = Post::where('status', 'published')->latest()->paginate(10);
        return view('frontend.posts.news-grid', compact('newsGrid'));
    }
}
