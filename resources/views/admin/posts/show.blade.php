@extends('layouts.admin-app')

@section('content')
<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-10 grid-margin stretch-card">

            <div class="card shadow-sm border-0">
                {{-- Featured Image --}}
                @if($post->featured_image)
                <img
                src="{{ asset('storage/' . $post->featured_image) }}"
                class="card-img-top rounded-top"
                alt="{{ $post->title }}"
                style="max-height: 420px; object-fit: cover;"
                >
                @endif
                <div class="card-body p-5">
                    @if ($postTags)
                    @foreach ($postTags as $postTag)
                    <span class="badge bg-primary text-white mb-3">
                        {{ $postTag->tag->name }}
                    </span>
                    @endforeach
                    @endif

                    {{-- Title --}}
                    <h2 class="card-title fw-bold mb-3">
                        {{ $post->title }}
                    </h2>

                    {{-- Meta --}}
                    <div class="d-flex align-items-center mb-4 text-muted small">
                        <span class="me-3">
                            <i class="mdi mdi-calendar"></i>
                            {{ $post->created_at->format('F d, Y') }}
                        </span>
                        <span class="me-3">
                            <i class="mdi mdi-account"></i>
                            {{ $post->user->name ?? 'Admin' }}
                        </span>
                        <span>
                            <i class="mdi mdi-tag"></i>
                            {{ $post->category->name ?? 'Uncategorized' }}
                        </span>
                    </div>
{{-- Excerpt --}}
                    <div class="card-text fs-6 lh-lg mb-4" style="white-space: pre-line;">
                        {!! $post->excerpt !!}
                    </div>

                    {{-- Content --}}
                    <div class="card-text fs-6 lh-lg" style="white-space: pre-line;">
                        {!! $post->content !!}
                    </div>

                    <hr class="my-5">

                    {{-- Buttons --}}
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.posts') }}" class="btn btn-secondary">
                            <i class="mdi mdi-arrow-left"></i> Back to Posts
                        </a>

                        <div>
                            <a href="{{ route('admin.posts.edit', $post->slug) }}" class="btn btn-warning me-2">
                                <i class="mdi mdi-pencil"></i> Edit Post
                            </a>

                            {{-- <form onclick="return confirm('Are you sure?')" action="{{ route('admin.posts.destroy', $post->slug) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="mdi mdi-delete"></i> Delete
                                </button>
                            </form> --}}
                        </div>
                    </div>
                </div>{{-- end card-body --}}
            </div>

        </div>
    </div>
</div>
@endsection
