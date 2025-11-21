@extends('layouts.frontend-app')
@section('title', 'News Grid')

@section('content')
<div class="pd-top-80 pd-bottom-50" id="grid">
    <div class="container">
        <div class="row">
            @forelse ($newsGrid as $post)
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="single-post-wrap style-overlay shadow-sm rounded">
                        <div class="thumb position-relative overflow-hidden rounded-top">
                            {{-- Redesigned Image Aspect --}}
                            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                                 class="img-fluid post-img">

                            <a class="tag-base tag-purple position-absolute top-0 start-0 m-2 px-2 py-1"
                               href="#">{{ $post->tags->name }}</a>
                        </div>

                        <div class="details p-3">
                            <div class="post-meta-single mb-2 text-white" style="font-size: 13px;">
                                <i class="fa fa-clock-o"></i> {{ $post->created_at->format('F d, Y') }}
                            </div>
                            <h6 class="title mb-2">
                                <a href="{{ route('post.show', $post->slug) }}" class="text-white text-capitalize">
                                    {{ Str::limit($post->title, 60) }}
                                </a>
                            </h6>

                            {{-- Livewire Like Button --}}
                            @auth
                                @livewire('frontend.post-like', ['post' => $post], key($post->id))
                            @else
                                <div class="text-muted" style="font-size: 14px;">
                                    <i class="fa fa-thumbs-up"></i> {{ $post->likes_count ?? 0 }}
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <h5>No Posts Available</h5>
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-4">
            {{ $newsGrid->links() }}
        </div>
    </div>
</div>

<style>
    .single-post-wrap {
        transition: transform 0.3s, box-shadow 0.3s;
        background: #fff;
    }

    .single-post-wrap:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .thumb {
        height: 220px; /* Fixed aspect height */
    }

    .post-img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Cover entire area while keeping aspect ratio */
        transition: transform 0.4s ease;
    }

    .thumb:hover .post-img {
        transform: scale(1.05); /* Slight zoom on hover */
    }

    .tag-base {
        font-size: 12px;
        font-weight: 600;
        border-radius: 4px;
        text-transform: uppercase;
    }
</style>
@endsection
