<!-- Create Modal -->
{{-- <div wire:ignore.self class="modal fade" id="createPostModal" tabindex="-1" role="dialog" aria-labelledby="createPostLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="createPostLabel">New Post</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form wire:submit.prevent="savePost">
					<div class="form-group">
						<label>Title</label>
						<input type="text" wire:model="title" class="form-control">
						@error('title') <span class="text-danger">{{ $message }}</span> @enderror
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Category</label>
							<select wire:model="category_id" class="form-control">
								<option value="">-- Select Category --</option>
								@foreach($categories as $cat)
									<option value="{{ $cat->id }}">{{ $cat->name }}</option>
								@endforeach
							</select>
							@error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
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

					<div class="form-group">
						<label>Content</label>
						<textarea wire:model="content" class="form-control" rows="6"></textarea>
						@error('content') <span class="text-danger">{{ $message }}</span> @enderror
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Featured Image</label>
							<input type="file" wire:model="tempImage" class="form-control-file">
							@error('tempImage') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
						<div class="form-group col-md-6">
							<label>Published at</label>
							<input type="datetime-local" wire:model="published_at" class="form-control">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-3">
							<div class="form-check">
								<input wire:model="is_featured" class="form-check-input" type="checkbox" id="is_featured">
								<label class="form-check-label" for="is_featured">Featured</label>
							</div>
						</div>
						<div class="form-group col-md-3">
							<div class="form-check">
								<input wire:model="is_breaking" class="form-check-input" type="checkbox" id="is_breaking">
								<label class="form-check-label" for="is_breaking">Breaking</label>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Save</button>
						<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div> --}}

<!-- Edit Modal (reuses same fields, submits to updatePost) -->
{{-- <div wire:ignore.self class="modal fade" id="editPostModal" tabindex="-1" role="dialog" aria-labelledby="editPostLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editPostLabel">Edit Post</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form wire:submit.prevent="updatePost">
					<!-- ...same fields as create form... -->
					<div class="form-group">
						<label>Title</label>
						<input type="text" wire:model="title" class="form-control">
						@error('title') <span class="text-danger">{{ $message }}</span> @enderror
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Category</label>
							<select wire:model="category_id" class="form-control">
								<option value="">-- Select Category --</option>
								@foreach($categories as $cat)
									<option value="{{ $cat->id }}">{{ $cat->name }}</option>
								@endforeach
							</select>
							@error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
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

					<div class="form-group">
						<label>Content</label>
						<textarea wire:model="content" class="form-control" rows="6"></textarea>
						@error('content') <span class="text-danger">{{ $message }}</span> @enderror
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Featured Image (leave empty to keep current)</label>
							<input type="file" wire:model="tempImage" class="form-control-file">
							@error('tempImage') <span class="text-danger">{{ $message }}</span> @enderror
						</div>
						<div class="form-group col-md-6">
							<label>Published at</label>
							<input type="datetime-local" wire:model="published_at" class="form-control">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-3">
							<div class="form-check">
								<input wire:model="is_featured" class="form-check-input" type="checkbox" id="edit_is_featured">
								<label class="form-check-label" for="edit_is_featured">Featured</label>
							</div>
						</div>
						<div class="form-group col-md-3">
							<div class="form-check">
								<input wire:model="is_breaking" class="form-check-input" type="checkbox" id="edit_is_breaking">
								<label class="form-check-label" for="edit_is_breaking">Breaking</label>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Update</button>
						<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div> --}}

<!-- Delete Modal -->
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Delete Post</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Are you sure you want to delete this post?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" wire:click="deletePost">Delete</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>

<script>
    document.addEventListener('livewire:initialized', () => {
        window.addEventListener('openCreatePostModal', () => {
            $('#editPostModal').modal('hide');
            $('#createPostModal').modal('show');
        });

        window.addEventListener('openEditPostModal', () => {
            $('#createPostModal').modal('hide');
            $('#editPostModal').modal('show');
        });

        window.addEventListener('closePostModal', () => {
            $('#createPostModal').modal('hide');
            $('#editPostModal').modal('hide');
        });

        window.addEventListener('openDeleteModal', () => {
            $('#deleteModal').modal('show');
        });

        window.addEventListener('closeDeletePostModal', () => {
            $('#deletePostModal').modal('hide');
        });

        $('#createPostModal, #editPostModal').on('hidden.bs.modal', function () {
            @this.dispatch('resetForm');
        });
    });
</script>
