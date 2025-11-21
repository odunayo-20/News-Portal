<div class="main-panel">

    @include('livewire.admin.category.modal')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Category Table
            </h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Category table</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="display">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Categories
                                    <button type="button" wire:click="$dispatch('createShowModal')" class="btn btn-primary btn-sm float-right">Add New Category</button>
                                </h4>
                                @if (session()->has('message'))
                                    <div class="alert alert-success">{{ session('message') }}</div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Featured</th>
                                                <th>Order</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $category)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ Str::limit($category->description, 50, '...') }}</td>
                                                 <td><img src="{{ Storage::url($category->featured_image) }}" width="100" /></td>
                                                {{-- <td>
                                                    @if($category->featured_image)
                                                        <img src="{{ asset('storage/' .$category->featured_image) }}" width="50">
                                                    @endif
                                                </td> --}}
                                                <td>{{ $category->is_featured ? 'Yes' : 'No' }}</td>
                                                <td>{{ $category->order }}</td>
                                                <td>{{ $category->created_at->format('d-m-Y') }}</td>
                                                <td>
                                                    <button wire:click="edit({{ $category->id }})" class="btn btn-sm btn-info">Edit</button>
                                                    <button wire:click="deleteConfirm({{ $category->id }})" class="btn btn-sm btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    {{ $categories->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

</div>
