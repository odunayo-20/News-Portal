<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="card-title mb-0">Posts</h4>
                        <a href="{{ route('admin.posts') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Back Post
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
                                    <h4 class="card-title">Article Details</h4>
                                    <form wire:submit.prevent="savePost">
                                        <!-- ...same fields as create form... -->
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" wire:model="title" class="form-control">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Category</label>
                                                <select wire:model="category_id" class="form-control">
                                                    <option value="">-- Select Category --</option>
                                                    @foreach ($categories as $cat)
                                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Status</label>
                                                <select wire:model="status" class="form-control">
                                                    <option value="draft">Draft</option>
                                                    <option value="published">Published</option>
                                                    <option value="scheduled">Scheduled</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Excerpt</label>
                                            <textarea wire:model="excerpt" class="form-control" rows="2"></textarea>
                                        </div>

                                        <div class="form-group" >
                                            <label>Content</label>
                                            <textarea wire:model="content" id="summernote" class="form-control" rows="6"></textarea>
                                            @error('content')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-row">
                                            <div wire:ignore class="form-group col-md-6">
                                                <label>Featured Image (leave empty to keep current)</label>
                                                <input type="file" class="dropify" wire:model="featured_image" id="featured_image" />
                                                @error('featured_image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>


                                            <div class="form-group col-md-6">
                                                <label>Published at</label>
                                                <input type="datetime-local" wire:model="published_at"
                                                    class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <div class="form-check">
                                                    <input wire:model="is_featured" class="form-check-input"
                                                        type="checkbox" id="edit_is_featured">
                                                    <label class="form-check-label"
                                                        for="edit_is_featured">Featured</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <div class="form-check">
                                                    <input wire:model="is_breaking" class="form-check-input"
                                                        type="checkbox" id="edit_is_breaking">
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
