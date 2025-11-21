<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
     public function show($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();

        // Get posts under this tag – assuming Post has: belongsToMany(Tag::class)
        $posts = $tag->posts()
            ->latest()
            ->paginate(12);

        return view('frontend.tag.show', compact(['tag', 'posts']));
    }
}
