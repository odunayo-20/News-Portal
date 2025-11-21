@extends('layouts.frontend-app')
@section('title', 'Home')
@section('content')
    <!-- Banner Area -->
    @include('frontend.partials.banner', ['aboutPostFirst' => $aboutPostFirst])

    <!-- About Posts Grid -->
    <div class="container py-5">
        <div class="row">
            @forelse ($aboutPosts as $post)
                @include('frontend.partials.post-card', ['post' => $post])
            @empty
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-white">
                        <div class="thumb">
                            <img src="{{ asset('frontend/assets/img/post/default.png') }}" alt="img">
                            <a class="tag-base tag-orange" href="#">No Tag</a>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="#">No post available</a></h6>
                            <div class="post-meta-single mt-3">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Trending & Latest News -->
   @include('frontend.partials.treadslatest', ['featuredPostsItem1' => $featuredPostsItem1, 'featuredPostsItem2' => $featuredPostsItem2, 'latestPostsItem1' => $latestPostsItem1, 'latestPostsItem2' => $latestPostsItem2])

    <!-- Posts Grid -->
    <div class="pd-top-80 pd-bottom-50" id="grid">
        <div class="container">
            <div class="row g-4">
                @forelse ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="single-post-wrap style-overlay h-100 shadow-sm rounded overflow-hidden position-relative transition-hover">
                            <!-- Post Image -->
                            <div class="thumb position-relative overflow-hidden">
                                <img src="{{ $post->featured_image && file_exists(public_path('storage/' . $post->featured_image)) ? asset('storage/' . $post->featured_image) : asset('frontend/assets/img/post/default.png') }}"
                                    alt="{{ Str::limit($post->title, 20, '...') }}" class="img-fluid w-100"
                                    style="height: 240px; object-fit: cover; transition: transform 0.4s;">
                                <a class="tag-base tag-blue position-absolute top-0 start-0 m-2">
                                    {{ $post->tags->name ?? 'Uncategorized' }}
                                </a>
                            </div>

                            <!-- Post Content -->
                            <div class="details p-3">
                                <div
                                    class="post-meta-single text-muted small mb-2 d-flex justify-content-between align-items-center">
                                    <span><i
                                            class="fa fa-clock-o me-1"></i>{{ $post->created_at->format('F d, Y') }}</span>
                                    <span><i class="fa fa-eye me-1"></i>{{ $post->views ?? 0 }}</span>
                                </div>
                                <h5 class="title mb-2">
                                    <a href="{{ route('post.show', $post->slug) }}" class="text-dark text-decoration-none">
                                        {{ Str::limit($post->title, 20, '...') }}
                                    </a>
                                </h5>
                                <p class="text-muted mb-3">{{ Str::limit(strip_tags($post->content), 100, '...') }}</p>
                                <a href="{{ route('post.show', $post->slug) }}"
                                    class="btn btn-sm btn-outline-primary">Read More</a>
                            </div>

                            <!-- Hover effect -->
                            <style>
                                .transition-hover:hover img {
                                    transform: scale(1.05);
                                }

                                .transition-hover:hover .details {
                                    background: rgba(255, 255, 255, 0.97);
                                }
                            </style>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted fs-5">No posts found.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
