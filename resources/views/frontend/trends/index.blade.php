@extends('layouts.frontend-app')

@section('content')
    <div class="pd-top-80 pd-bottom-50" id="grid">
        <div class="container">
            <div class="row">
                @forelse ($featuredPosts as $value)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-post-wrap style-overlay">
                            <div class="thumb">
                                <img src="{{ asset('storage/' . $value->featured_image) }}" alt="img">
                                <a class="tag-base tag-purple" href="#">{{ $value->category->name }}</a>
                            </div>
                            <div class="details">
                                <div class="post-meta-single">
                                    <p><i class="fa fa-clock-o"></i>{{ $value->created_at->format('F d, Y') }}</p>
                                </div>
                                <h6 class="title"><a href="{{ route('post.show', $value->slug) }}">{{ $value->title }}</a>
                                </h6>
                            </div>
                        </div>
                    </div>

                @empty

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-post-wrap style-overlay">

                                <h6 class="title"> No Posts </h6>
                            </div>
                        </div>
                    </div>
                @endforelse


            </div>
            {{ $featuredPosts->links() }}
        </div>
    </div>
@endsection
