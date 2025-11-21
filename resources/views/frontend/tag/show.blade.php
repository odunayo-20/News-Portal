@extends('layouts.frontend-app')
@section('title', 'Tag: ' . $tag->name)

@section('content')
<div class="pd-top-80 pd-bottom-50">
    <div class="container">

        <h3 class="mb-4">Tag: {{ $tag->name }}</h3>

        <div class="row">
            @forelse ($posts as $post)
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="single-post-wrap style-overlay">

                        <div class="thumb">
                            <img
                                src="{{ $post->featured_image
                                    ? asset('storage/' . $post->featured_image)
                                    : asset('default.jpg') }}"
                                alt="{{ $post->title }}"
                                class="img-fluid object-cover"
                                style="width: 100%; height: 200px; object-fit: cover; object-position: center; border-radius: 8px;"
                            >

                            <a class="tag-base tag-purple" href="#">
                                {{ $tag->name }}
                            </a>
                        </div>

                        <div class="details mt-3">
                            <div class="post-meta-single">
                                <p>
                                    <i class="fa fa-clock-o"></i>
                                    {{ $post->created_at->format('F d, Y, h:ia') }}
                                </p>
                            </div>

                            <h6 class="title">
                                <a href="{{ route('post.show', $post->slug) }}">
                                    {{ Str::limit($post->title, 50) }}
                                </a>
                            </h6>
                        </div>

                    </div>
                </div>
            @empty

                <div class="col-lg-12 text-center py-5">
                    <h5>No posts under this tag</h5>
                </div>

            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-4">
            {{ $posts->links() }}
        </div>

    </div>
</div>
@endsection
