  <div class="banner-area banner-inner-1 bg-black" id="banner">
        <div class="banner-inner pt-5">
            <div class="container">
                <div class="row">
                    @foreach ($aboutPostFirst as $post)
                        <div class="col-lg-6">
                            <div class="thumb after-left-top">
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="banner-details mt-4 mt-lg-0">
                                <div class="post-meta-single">
                                    <ul>
                                        <li><a class="tag-base tag-blue" href="#">{{ $post->tags->name }}</a></li>
                                        <li class="date"><i class="fa fa-clock-o"></i>{{ $post->created_at->format('m.d.Y') }}</li>
                                    </ul>
                                </div>
                                <h2>{{ $post->title }}</h2>
                                <p>{!! Str::limit($post->content, 150, '...') !!}</p>
                                <a class="btn btn-blue" href="{{ route('post.show', $post->slug) }}">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
