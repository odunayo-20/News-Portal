@extends('layouts.frontend-app')
@section('title', 'Post:' . $post->title)

@section('content')
<style>
    .post-cover {
        width: 100%;
        height: 420px;
        object-fit: cover;
        border-radius: 12px;
    }

    .main-wrapper {
        display: grid;
        grid-template-columns: 1fr 350px;
        gap: 40px;
        margin-top: 40px;
        margin-bottom: 80px;
    }

    @media(max-width: 992px){
        .main-wrapper {
            grid-template-columns: 1fr;
        }
    }

    .post-meta span {
        margin-right: 15px;
        color: #555;
        font-size: 14px;
    }

    .blog-post h2 {
        font-size: 32px;
        font-weight: 700;
        margin-top: 20px;
    }

    .blog-post p {
        font-size: 17px;
        line-height: 1.7;
        color: #333;
        margin-bottom: 18px;
    }

    /* Sidebar */
    .sidebar-title {
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 18px;
        border-left: 4px solid #007bff;
        padding-left: 10px;
    }

    .category-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .category-item {
        background: #eef4ff;
        padding: 8px 14px;
        border-radius: 5px;
        font-size: 14px;
        color: #0046a0;
        font-weight: 500;
    }

    /* Trending News */
    .trending-card {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
    }

    .trending-card img {
        width: 85px;
        height: 65px;
        object-fit: cover;
        border-radius: 6px;
    }

    .trending-card h6 {
        font-size: 15px;
        font-weight: 600;
        margin-top: 3px;
    }

    /* Newsletter */
    .newsletter {
        background: #f7faff;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
        text-align: center;
        border: 1px solid #e0e8ff;
    }

    .newsletter input {
        width: 100%;
        border: 1px solid #ccc;
        height: 42px;
        border-radius: 6px;
        padding: 10px;
        margin-bottom: 10px;
    }

    .newsletter button {
        width: 100%;
        background: #007bff;
        color: #fff;
        height: 42px;
        border-radius: 6px;
        border: none;
        font-weight: 600;
    }

    /* Comments */
    .comment-box {
        margin-top: 60px;
    }

    .comment-card {
        border: 1px solid #eee;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 15px;
        background: #fff;
    }

    .comment-card img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
    }

    .comment-card p {
        font-size: 15px;
        margin-top: 8px;
    }
</style>


<div class="container">

    <div class="main-wrapper">

        <!-- =======================
            MAIN ARTICLE CONTENT
        ======================== -->
        <div class="main-content">
            <div class="blog-post">
                <img src="{{ asset('storage/' . $post->featured_image) }}" class="post-cover" alt="{{ $post->title }}">

                <div class="details mt-3">

                    <div class="post-meta mb-3">
                        <span><i class="fa fa-user"></i> {{ $post->user->name }}</span>
                        <span><i class="fa fa-calendar"></i> {{ $post->created_at->format('d F Y') }}</span>
                        <span><i class="fa fa-comments"></i> {{ $post->comments->count() }} Comments</span>
                        <span><i class="fa fa-clock-o"></i> {{ $post->reading_time }}</span>
                        <span><i class="fa fa-eye"></i> {{ $post->views }} views</span>
                        @livewire('frontend.post-like', ['post' => $post])

                    </div>

                    <h2>{{ $post->title }}</h2>

                    <p class="text-muted">{!! $post->excerpt !!}</p>

                    <div class="content-body">
                        {!! $post->content !!}
                    </div>

                </div>
            </div>
        </div>


        <!-- =======================
            SIDEBAR
        ======================== -->
        <div class="sidebar">

            <!-- Categories -->
            <div class="sidebar-item mb-4">
                <div class="sidebar-title">Categories</div>

                <div class="category-grid">
                    @forelse ($categories as $category)
                        <div class="category-item"><a href="{{ route('category.show', $category->slug) }}" class="text-decoration-none">{{ $category->name }}</a></div>
                    @empty
                        <div class="category-item">No Categories</div>
                    @endforelse
                </div>
            </div>


            <!-- Trending News -->
            <div class="sidebar-item mb-4">
                <div class="sidebar-title">Trending News</div>

                @forelse ($treadPosts as $treadPost)
                    <div class="trending-card">
                        <img src="{{ asset('storage/' . $treadPost->featured_image) }}" alt="{{ $treadPost->title }}">
                        <div class="details">
                            <small class="text-muted">{{ $treadPost->created_at->format('d F Y') }}</small>
                            <h6><a href="{{ route('post.show', $treadPost->slug) }}">{{ $treadPost->title }}</a></h6>
                        </div>
                    </div>
                @empty
                    <p>No trending news available.</p>
                @endforelse

            </div>


            <!-- Newsletter -->
            <div class="newsletter">
                <h4>Newsletter</h4>
                <p>Stay Updated With Us</p>
                <input type="email" placeholder="Your email here">
                <button><i class="fa fa-envelope"></i> Subscribe Now</button>
            </div>

        </div>

    </div><!-- END main-wrapper -->


    <!-- =======================
        COMMENTS SECTION
    ======================== -->
    <div class="comment-box">
        @include('frontend.posts.comment', ['post' => $post])
    </div>

</div>
@endsection
