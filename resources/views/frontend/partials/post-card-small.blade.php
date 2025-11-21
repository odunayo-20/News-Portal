<div class="single-post-wrap">
    <div class="thumb">
        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}">
    </div>
    <div class="details">
        <div class="post-meta-single mb-4 pt-1">
            <ul>
                <li><a class="tag-base tag-blue" href="#">{{ $post->tags->name }}</a></li>
                <li><i class="fa fa-clock-o"></i>{{ $post->created_at->format('m.d.Y') }}</li>
            </ul>
        </div>
        <h6 class="title"><a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a></h6>
        <p>{!! Str::limit($post->content, 100, '...') !!}</p>
    </div>
</div>
