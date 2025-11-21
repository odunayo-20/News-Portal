<div class="latest-post-card mb-4 position-relative overflow-hidden rounded" style="background:#fff; box-shadow:0 4px 12px rgba(0,0,0,0.08); transition:all 0.3s;">
    <!-- Post Thumbnail -->
    <div class="post-thumb position-relative" style="height:180px; overflow:hidden;">
        <a href="{{ route('post.show', $post->slug) }}">
            <img
                src="{{ $post->featured_image && file_exists(public_path('storage/' . $post->featured_image)) ? asset('storage/' . $post->featured_image) : asset('frontend/assets/img/post/default.png') }}"
                alt="{{ $post->title }}"
                class="w-100 h-100"
                style="object-fit:cover; transition:transform 0.4s;">
        </a>
        <!-- Category Tag -->
        <span class="tag-base tag-purple position-absolute top-2 start-2 px-2 py-1 small">{{ $post->tags->name ?? 'Uncategorized' }}</span>
    </div>

    <!-- Post Content -->
    <div class="post-content p-3">
        <!-- Post Date -->
        <div class="text-muted small mb-1">
            <i class="fa fa-clock-o me-1"></i>{{ $post->created_at->format('F d, Y') }}
        </div>
        <!-- Post Title -->
        <h5 class="post-title mb-0">
            <a href="{{ route('post.show', $post->slug) }}" class="text-dark text-decoration-none fw-bold">
                {{ Str::limit($post->title, 80) }}
            </a>
        </h5>
    </div>
</div>
<style>
    .latest-post-card:hover img {
    transform: scale(1.05);
}

.latest-post-card {
    cursor: pointer;
    transition: all 0.3s ease;
}

</style>