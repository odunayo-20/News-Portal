<div wire:ignore.self class="modal fade" style="z-index: 1069" id="exampleModal-3" tabindex="-1" role="dialog"
    aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form wire:submit.prevent="saveCategory">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" wire:model.defer="name" class="form-control">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Description:</label>
                        <textarea class="form-control" wire:model.defer="description"></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div  wire:ignore class="form-group">
                        <label>Featured Image:</label>
                        <input type="file" wire:model.defer='featured_image' class="dropify">
                        @error('featured_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    window.addEventListener('closeModal', () => {
        $('#exampleModal-3').modal('hide');
    });
</script> --}}



{{-- edit --}}

<div wire:ignore.self class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="$set('featured_image', null)">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateCategory">
                    <div class="form-group mb-3">
                        <label class="col-form-label">Name:</label>
                        <input type="text" wire:model.defer="name" class="form-control">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="col-form-label">Description:</label>
                        <textarea class="form-control" wire:model.defer="description"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3" wire:ignore>
                        <label>Featured Image</label>
                        <input type="file" class="dropify" wire:model="featured_image"
                            @if($categoryId && !$featured_image && optional($category)->featured_image)
                                data-default-file="{{ Storage::url($category->featured_image) }}"
                            @endif
                        >
                        @error('featured_image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal" wire:click="$set('featured_image', null)">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Delete Confirmation Modal -->
<div class="modal fade" style="z-index: 1069" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this category?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" wire:click="deleteCategory">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
