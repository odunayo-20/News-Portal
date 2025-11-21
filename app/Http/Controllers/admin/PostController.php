<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }


    public function create()
    {
        $categories = Category::get();
        $tags = Tag::get();
        return view('admin.posts.create', compact('categories', 'tags'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255|unique:posts,title',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'tag_id' => 'required|exists:tags,id',
            'featured_image' => 'nullable|image|max:2048',
            'status' => 'required|in:draft,published,scheduled',
            'published_at' => 'nullable|date',
            // 'is_featured' => 'boolean',
            // 'is_breaking' => 'boolean',
        ]);

        $data = [
            'user_id' => auth()->id(),
            'title' => $request->title,
            'slug' => $request->slug ? Str::slug($request->slug) : Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'tag_id' => $request->tag_id,
            'status' => $request->status,
            'published_at' => $request->published_at,
            'is_featured' => (bool) $request->is_featured,
            'is_breaking' => (bool) $request->is_breaking,
        ];

        if ($request->featured_image) {
            $data['featured_image'] = $request->featured_image->store('posts', 'public');
        }

        // dd($data);

        Post::create($data);

        session()->flash('message', 'Post created successfully.');
        return redirect()->route('admin.posts');
    }


    public function edit($slug)
    {
        $categories = Category::get();
        $tags = Tag::get();
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('admin.posts.edit', compact('categories', 'post', 'tags'));
    }


    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'category_id' => 'required',
            'tag_id' => 'required',
            'featured_image' => 'nullable|image|max:2048',
            'status' => 'required|in:draft,published,scheduled',
            'published_at' => 'nullable',
            // 'is_featured' => 'boolean',
            // 'is_breaking' => 'boolean',
        ]);

        $data = [
            'title' => $request->title,
            'slug' => $request->slug ? Str::slug($request->slug) : Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'tag_id' => $request->tag_id,
            'status' => $request->status,
            'published_at' => $request->published_at,
            'is_featured' => (bool) $request->is_featured,
            'is_breaking' => (bool) $request->is_breaking,
        ];

        // dd($data);
        if ($request->featured_image) {
            $data['featured_image'] = $request->featured_image->store('posts', 'public');
            if ($post->featured_image) {
                // Delete old image
                Storage::disk('public')->delete($post->featured_image);
            }
        }

        $post->update($data);

        session()->flash('message', 'Post updated successfully.');
        return redirect()->route('admin.posts');
    }



    public function show($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        $postTags = PostTag::where('post_id', $post->id)->get();
// dd($postTag);
        return view('admin.posts.show', compact(['post', 'postTags']));
    }
}
