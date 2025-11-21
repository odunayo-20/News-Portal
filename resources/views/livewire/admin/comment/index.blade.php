<div class="main-panel">

    @include('livewire.admin.comment.modal')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Comment Table
            </h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Comment table</li>
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
                                <h4 class="card-title">Comment

                                </h4>
                                @if (session()->has('message'))
                                    <div class="alert alert-success">{{ session('message') }}</div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                {{-- <th>Name</th> --}}
                                                <th>User</th>
                                                <th>Post Title </th>
                                                <th>Status</th>

                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($comments as $value)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $value->user->name }}</td>
                                                <td>{{ $value->post->title}}</td>
                                                <td>{{ $value->is_approved}}</td>
                                                {{-- <td>{{ $value->is_approved =  "Approved" ? "Decline" }}</td> --}}

                                                <td>{{ $value->created_at->format('d-m-Y') }}</td>
                                                <td>
                                                    <button wire:click="edit({{ $value->id }})" class="btn btn-sm btn-info">Edit</button>
                                                    <button wire:click="deleteConfirm({{ $value->id }})" class="btn btn-sm btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
