<div class="col-lg-4 col-md-6 mb-4">
    <div class="single-post-wrap card shadow-sm border-0 overflow-hidden h-100">
        <!-- Post Image -->
        <div class="post-thumb position-relative">
            <img
                src="{{ $post->featured_image && file_exists(public_path('storage/' . $post->featured_image)) ? asset('storage/' . $post->featured_image) : asset('frontend/assets/img/post/default.png') }}"
                alt="{{ $post->title }}"
                class="card-img-top img-fluid"
                style="object-fit: cover; height: 220px; width: 100%;">

            <a href="#" class="tag-base tag-purple position-absolute top-0 start-0 m-2 px-3 py-1 text-white rounded">
                {{ $post->tags->name ?? 'Uncategorized' }}
            </a>
        </div>

        <!-- Post Content -->
        <div class="card-body">
            <div class="post-meta mb-2 text-muted small">
                <i class="fa fa-clock-o me-1"></i>{{ $post->created_at->format('F d, Y') }}
            </div>

            <h6 class="card-title mb-2">
                <a href="{{ route('post.show', $post->slug) }}" class="text-dark text-decoration-none">
                    {{ Str::limit($post->title, 60) }}
                </a>
            </h6>

            <p class="card-text text-muted small">
                {!! Str::limit(strip_tags($post->content), 80, '...') !!}
            </p>

            <a href="{{ route('post.show', $post->slug) }}" class="btn btn-sm btn-purple mt-2">Read More</a>
        </div>
    </div>
</div>
