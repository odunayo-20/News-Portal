 <div class="post-area pd-top-75 pd-bottom-50" id="trending">
        <div class="container">
            <div class="row">

                <!-- Trending News -->
                <div class="col-lg-4 col-md-6">
                    <div class="section-title">
                        <h6 class="title">Trending News</h6>
                    </div>
                    <div class="post-slider owl-carousel">

                        @php
                            $trendingSets = [];
                            if ($featuredPostsItem1->count() > 0) {
                                $trendingSets[] = $featuredPostsItem1;
                            }
                            if ($featuredPostsItem2->count() > 0) {
                                $trendingSets[] = $featuredPostsItem2;
                            }
                        @endphp

                        @foreach ($trendingSets as $featuredPosts)
                            <div class="item">
                                <div class="trending-post">
                                    @forelse ($featuredPosts as $post)
                                        <div class="single-post-wrap style-overlay mb-3">
                                            <div class="thumb position-relative">
                                                <img src="{{ $post->featured_image && file_exists(public_path('storage/' . $post->featured_image)) ? asset('storage/' . $post->featured_image) : asset('frontend/assets/img/post/default.png') }}"
                                                    alt="{{ $post->title }}" class="img-fluid"
                                                    style="height:200px; width:100%; object-fit:cover;">
                                                <a class="tag-base tag-purple position-absolute top-0 start-0 m-2">
                                                    {{ $post->tags->name ?? 'Uncategorized' }}
                                                </a>
                                            </div>
                                            <div class="details mt-2">
                                                <div class="post-meta-single text-muted small mb-1">
                                                    <i
                                                        class="fa fa-clock-o me-1"></i>{{ $post->created_at->format('F d, Y') }}
                                                </div>
                                                <h6 class="title mb-0">
                                                    <a href="{{ route('post.show', $post->slug) }}"
                                                        class="text-dark text-decoration-none">
                                                        {{ Str::limit($post->title, 50) }}
                                                    </a>
                                                </h6>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="single-post-wrap style-overlay mb-3">
                                            <div class="thumb">
                                                <img src="{{ asset('frontend/assets/img/post/5.png') }}"
                                                    alt="No post available">
                                            </div>
                                            <div class="details mt-2">
                                                <div class="post-meta-single text-muted small mb-1">
                                                    <i class="fa fa-clock-o me-1"></i>{{ now()->format('F d, Y') }}
                                                </div>
                                                <h6 class="title"><a href="#">No post available</a></h6>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>


                <!-- Latest News -->
                <!-- Latest News -->
                <div class="col-lg-4 col-md-6">
                    <div class="section-title">
                        <h6 class="title">Latest News</h6>
                    </div>
                    <div class="post-slider owl-carousel">
                        @foreach ([$latestPostsItem1, $latestPostsItem2] as $latestPosts)
                            @if ($latestPosts->isNotEmpty())
                                <div class="item">
                                    @foreach ($latestPosts as $post)
                                        @include('frontend.partials.post-list', ['post' => $post])
                                    @endforeach
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>



                <!-- Social Area / Ads -->
                <div class="col-lg-4 col-md-6">
                    <div class="section-title">
                        <h6 class="title">Join With Us</h6>
                    </div>
                    <div class="social-area-list mb-4">
                        <ul>
                            <li><a class="facebook" href="#"><i
                                        class="fa fa-facebook social-icon"></i><span>12,300</span><span>Like</span> <i
                                        class="fa fa-plus"></i></a></li>
                            <li><a class="twitter" href="#"><i
                                        class="fa fa-twitter social-icon"></i><span>12,600</span><span>Followers</span> <i
                                        class="fa fa-plus"></i></a></li>
                            <li><a class="youtube" href="#"><i
                                        class="fa fa-youtube-play social-icon"></i><span>1,300</span><span>Subscribers</span>
                                    <i class="fa fa-plus"></i></a></li>
                            <li><a class="instagram" href="#"><i
                                        class="fa fa-instagram social-icon"></i><span>52,400</span><span>Followers</span> <i
                                        class="fa fa-plus"></i></a></li>
                            <li><a class="google-plus" href="#"><i
                                        class="fa fa-google social-icon"></i><span>19,101</span><span>Subscribers</span> <i
                                        class="fa fa-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="add-area">
                        <a href="#"><img class="w-100" src="assets/img/add/6.png" alt="img"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
