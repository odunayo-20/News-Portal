<div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap style-white">
        <div class="thumb">
            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}">
            <a class="tag-base tag-orange" href="#">{{ $post->tags->name }}</a>
        </div>
        <div class="details">
            <h6 class="title"><a href="{{ route('post.show', $post->slug) }}">{{ $post->title }}</a></h6>
            <div class="post-meta-single mt-3">
                <ul>
                    <li><i class="fa fa-clock-o"></i>{{ $post->created_at->format('m.d.Y') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
