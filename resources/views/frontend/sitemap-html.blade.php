@extends('layouts.frontend-app')
@section('title', 'Sitemap')
@section('content')
<div class="container py-5">
    <h1 class="mb-4">Sitemap</h1>

    <div class="mb-5">
        <h3>Main Pages</h3>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
            <li><a href="{{ url('/terms') }}">Terms & Conditions</a></li>
            <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
        </ul>
    </div>

    <div class="mb-5">
        <h3>Categories</h3>
        <ul>
            @foreach ($categories as $category)
                <li><a href="{{ url('/category/' . $category->slug) }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>

    <div class="mb-5">
        <h3>Posts</h3>
        <ul>
            @foreach ($posts as $post)
                <li><a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    </div>

</div>
@endsection
