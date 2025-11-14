<div class="main-panel">

    @include('livewire.admin.tag.modal')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="card-title mb-0">Tags</h4>
                            <button wire:click="openCreateModal" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i> Add New Tag
                            </button>
                        </div>

                        @if (session()->has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Created</th>
                                    <th style="width:120px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($tags as $tag)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td>{{ $tag->slug }}</td>
                                        <td>{{ $tag->created_at ? $tag->created_at->format('d M Y') : '-' }}</td>
                                        <td>
                                            <button wire:click="edit({{ $tag->id }})" class="btn btn-sm btn-info"
                                                    title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button wire:click="deleteConfirm({{ $tag->id }})" class="btn btn-sm btn-danger"
                                                    title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No tags found.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-3">
                            {{ $tags->links() }}
                        </div>
                    </div>
                </div>

                {{-- include modal partial (already present) --}}
                @include('livewire.admin.tag.modal')
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

</div>
