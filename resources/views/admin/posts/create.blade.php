@extends('layouts.admin-app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="card-title mb-0">Posts</h4>
                            <a href="{{ route('admin.posts') }}" class="btn btn-danger btn-sm">
                                <i class="fas fa-plus"></i> Back To Post
                            </a>
                        </div>

                        @if (session()->has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Post Details</h4>
                                        <form action="{{ route('admin.posts.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <!-- ...same fields as create form... -->
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" value="{{ old('title') }}" name="title"
                                                    class="form-control">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Category</label>
                                                    <select name="category_id" class="form-control">
                                                        <option value="">-- Select Category --</option>
                                                        @foreach ($categories as $cat)
                                                            <option value="{{ $cat->id }}"
                                                                {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                                                                {{ $cat->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Tag</label>
                                                    <select name="tag_id" class="form-control">
                                                        <option value="">-- Select Tag --</option>
                                                        @foreach ($tags as $value)
                                                            <option value="{{ $value->id }}"
                                                                {{ old('tag_id') == $value->id ? 'selected' : '' }}>
                                                                {{ $value->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('tag_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="draft"
                                                            {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                                        <option value="published"
                                                            {{ old('status') == 'published' ? 'selected' : '' }}>Published
                                                        </option>
                                                        <option value="scheduled"
                                                            {{ old('status') == 'scheduled' ? 'selected' : '' }}>Scheduled
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Excerpt</label>
                                                <textarea name="excerpt" class="form-control" rows="2">{{ old('excerpt') }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                {{-- <div id="summernoteExample"></div> --}}
                                                <label>Content</label>
                                                <textarea name="content" id="summernoteExample" class="form-control" rows="6">{{ old('content') }}</textarea>
                                                @error('content')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-row">
                                                <div wire:ignore class="form-group col-md-6">
                                                    <label>Featured Image (leave empty to keep current)</label>
                                                    <input type="file" class="dropify" name="featured_image"
                                                        id="featured_image" data-default-file="">
                                                    {{-- <input type="file" class="dropify" name="featured_image"
                                                        id="featured_image"
                                                        data-default-file="{{ $post->featured_image ? Storage::url($post->featured_image) : '' }}"> --}}

                                                    @error('featured_image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>


                                                <div class="form-group col-md-6">
                                                    <label>Published at</label>
                                                    <input type="datetime-local" name="published_at" class="form-control"
                                                        value="{{ old('published_at') }}">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <div class="form-check">
                                                        <input name="is_featured" class="form-check-input" type="checkbox"
                                                            id="edit_is_featured"
                                                            {{ old('is_featured') ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                            for="edit_is_featured">Featured</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <div class="form-check">
                                                        <input name="is_breaking" class="form-check-input" type="checkbox"
                                                            id="edit_is_breaking"
                                                            {{ old('is_breaking') ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                            for="edit_is_breaking">Breaking</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-light"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
