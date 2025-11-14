<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(2);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        // Validate and store the article
       $validated = $request->validate([
           'title' => 'required|string|max:255|unique:articles,title',
           'content' => 'required|string',
           'excerpt' => 'nullable|string',
           'featured_image' => 'nullable|image',
           'status' => 'required|in:draft,review,published,archived',
           // Add other validation rules as needed
       ]);

   if ($request->hasFile('featured_image')) {
    $path = $request->file('featured_image')->store('featured_images', 'public');
}


       $article = Article::create([
              'user_id' => auth()->id(),
              'title' => $validated['title'],
              'slug' => Str::slug($validated['title']),
              'content' => $validated['content'],
              'excerpt' => $validated['excerpt'] ?? null,
              'featured_image' => $path ?? null,
              'status' => $validated['status'],
              'published_at' => $validated['status'] === 'published' ? now() : null,
       ]);

        // Logic to store the article in the database

        return redirect()->route('admin.articles')->with('success', 'Article created successfully.');
    }

}
