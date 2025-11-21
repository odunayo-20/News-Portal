<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    {{-- Home --}}
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <priority>1.0</priority>
    </url>

    {{-- Main Pages --}}
    <url>
        <loc>{{ url('/about') }}</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/contact') }}</loc>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ url('/terms') }}</loc>
        <priority>0.5</priority>
    </url>
    <url>
        <loc>{{ url('/privacy') }}</loc>
        <priority>0.5</priority>
    </url>

    {{-- Categories --}}
    @foreach ($categories as $category)
        <url>
            <loc>{{ url('/category/' . $category->slug) }}</loc>
            <lastmod>{{ $category->updated_at->toAtomString() }}</lastmod>
            <priority>0.6</priority>
        </url>
    @endforeach

    {{-- Posts --}}
    @foreach ($posts as $post)
        <url>
            <loc>{{ url('/post/' . $post->slug) }}</loc>
            <lastmod>{{ $post->updated_at->toAtomString() }}</lastmod>
            <priority>0.9</priority>
        </url>
    @endforeach

</urlset>
