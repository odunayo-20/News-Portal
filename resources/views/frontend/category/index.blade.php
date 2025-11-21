@extends('layouts.frontend-app')
@section('title', 'Categories')

@section('content')
<div class="pd-top-80 pd-bottom-50" id="grid">
    <div class="container">

        <div class="row">
            @forelse ($categories as $value)
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="single-post-wrap style-overlay">

                        <div class="thumb">
                            <img
                                src="{{ $value->featured_image
                                    ? asset('storage/' . $value->featured_image)
                                    : asset('default.jpg') }}"
                                alt="{{ $value->name }}"
                                class="img-fluid object-cover"
                                style="width: 100%; height: 200px; object-fit: cover; object-position: center; border-radius: 8px;"
                            >

                            <a class="tag-base tag-purple" href="{{ route('category.show', $value->slug) }}">
                                {{ $value->name }}
                            </a>
                        </div>

                        <div class="details mt-3">
                            <div class="post-meta-single">
                                <p>
                                    <i class="fa fa-clock-o"></i>
                                    {{ $value->created_at->format('F d, Y, h:ia') }}
                                </p>
                            </div>

                            <h6 class="title">
                                <a href="{{ route('category.show', $value->slug) }}">
                                    {{ Str::limit($value->description, 50, '...') }}
                                </a>
                            </h6>
                        </div>

                    </div>
                </div>

            @empty

                <div class="col-lg-12 text-center py-5">
                    <h5>No Category Found</h5>
                </div>

            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-4">
            {{ $categories->links() }}
        </div>

    </div>
</div>

<style>
    .object-cover {
    object-fit: cover;
    object-position: center;
    width: 100%;
    height: 100%;
}

/* .single-post-wrap .thumb {
    position: relative;
}

.single-post-wrap .thumb img {
    border-radius: 8px;
    width: 100%;
    display: block;
}

.single-post-wrap .tag-base {
    position: absolute;
    left: 10px;
    bottom: 10px;
    padding: 5px 12px;
    border-radius: 4px;
} */

</style>
@endsection
