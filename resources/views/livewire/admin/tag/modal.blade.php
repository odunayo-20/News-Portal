<!-- Create Modal -->
<div wire:ignore.self class="modal fade" id="createTagModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">New Tag</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="saveTag">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" wire:model='name' class="form-control" id="recipient-name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
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

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="editTagModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Tag</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateTag">
                    <div class="form-group">
                        <label for="edit-tag-name" class="col-form-label">Name:</label>
                        <input type="text" wire:model="name" class="form-control" id="edit-tag-name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Tag</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this tag?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" wire:click="deleteTag">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:initialized', () => {
        // Modal handling events
        window.addEventListener('openCreateModal', () => {
            $('#editTagModal').modal('hide');
            $('#createTagModal').modal('show');
        });

        window.addEventListener('openEditModal', () => {
            $('#createTagModal').modal('hide');
            $('#editTagModal').modal('show');
        });

        window.addEventListener('closeModal', () => {
            $('#createTagModal').modal('hide');
            $('#editTagModal').modal('hide');
        });

        window.addEventListener('show-delete-modal', () => {
            $('#deleteModal').modal('show');
        });

        window.addEventListener('close-delete-modal', () => {
            $('#deleteModal').modal('hide');
        });

        // Handle Bootstrap modal events
        $('#createTagModal, #editTagModal').on('hidden.bs.modal', function () {
            @this.dispatch('resetForm');
        });
    });
</script>
