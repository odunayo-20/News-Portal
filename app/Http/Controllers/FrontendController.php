<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTag;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $paginationTheme = 'bootstrap';



    public function post()
    {
        return view('frontend.posts.index');
    }

    public function showPost($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        // Get visitor IP
        $ip = request()->ip();

        // Check if this IP has already viewed the post
        $viewed = session()->get('post_views_' . $post->id, []);

        if (!in_array($ip, $viewed)) {
            $post->increment('views');

            // Save this IP in session to prevent multiple counts
            $viewed[] = $ip;
            session()->put('post_views_' . $post->id, $viewed);
        }

        $postTags = PostTag::get();
        $categories = Category::get();
        $treadPosts = Post::where('status', 'published')->where('is_featured', true)->latest()->take(5)->get();

        return view('frontend.posts.show', compact(['post', 'postTags', 'categories', 'treadPosts']));
    }



    public function trend()
    {
        $featuredPosts = Post::where('status', 'published')->where('is_featured', true)->latest()->paginate(1);
        return view('frontend.trends.index', compact(['featuredPosts']));
    }


    public function newsGrid()
    {
        $newsGrid = Post::where('status', 'published')->latest()->paginate(10);
        return view('frontend.posts.news-grid', compact(['newsGrid']));
    }


    public function contact()
    {
        return view('frontend.contact');
    }


    public function storeContact(Request $request)
    {
        $data =  $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        Contact::create($data);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function category(){
        $categories = Category::paginate(10);
        return view('frontend.category.index', compact(['categories']));
    }

    public function categoryShow($slug){
        $category = Category::where('slug', $slug)->first();
        // dd($category);
        $categoryPosts = Post::where('category_id', $category->id)->paginate(10);

        return view('frontend.category.show', compact(['categoryPosts','category']));
    }



    public function terms(){
        return view('frontend.conditions.terms');
    }
    public function privacy(){
        return view('frontend.conditions.privacy');
    }

    public function sitemap()
{
    $categories = Category::all();
    $recentPosts = Post::latest()->take(10)->get();

    return view('frontend.sitemap', compact('categories', 'recentPosts'));
}



     public function index()
    {
        $aboutPostFirst =  Post::where('status', 'published')->latest()->take(1)->get();
        $aboutPosts =  Post::where('status', 'published')->latest()->take(4)->get();
        $postTags = PostTag::get();
        $allFeaturedPosts = Post::where('status', 'published')
    ->where('is_featured', true)
    ->latest()
    ->take(5) // total posts you want for slider
    ->get();

// Split into 2 sides
$featuredPostsItem1 = $allFeaturedPosts->take(3);
$featuredPostsItem2 = $allFeaturedPosts->slice(3); // remaining posts

$allLatestPosts = Post::where('status', 'published')
    ->latest()
    ->take(6)->get(); // total posts you want for latest section
        $latestPostsItem1 = $allLatestPosts->take(3);
        $latestPostsItem2 = $allLatestPosts->slice(3); // remaining posts
        $posts = Post::where('status', 'published')->latest()->get();
        $tags = Tag::get();
        // dd($tags);
        return view('frontend.index', compact(['aboutPosts', 'postTags', 'latestPostsItem1', 'latestPostsItem2', 'featuredPostsItem1', 'featuredPostsItem2', 'aboutPostFirst', 'posts', 'tags']));
    }


}
