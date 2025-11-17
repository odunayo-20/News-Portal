@extends('layouts.admin-app')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Profile
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"> Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="card-title mb-0">User</h4>
                                <a href="{{ route('admin.profile') }}" class="btn btn-danger btn-sm">
                                    <i class="fas fa-plus"></i> Back To Profile
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
                                            <h4 class="card-title">User Details</h4>
                                            <form action="{{ route('admin.profile.update', $user->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <!-- ...same fields as create form... -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input type="text" value="{{ old('name', $user->name) }}"
                                                                name="name" class="form-control">
                                                            @error('name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" value="{{ old('email', $user->email) }}"
                                                                name="email" class="form-control">
                                                            @error('email')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text"
                                                                value="{{ old('username', $user->username) }}"
                                                                name="username" class="form-control">
                                                            @error('username')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Bio</label>
                                                            <input type="text" value="{{ old('bio', $user->bio) }}"
                                                                name="bio" class="form-control">
                                                            @error('bio')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Social Links</label>
                                                            <label>Facebook</label>
                                                            <input type="text" name="social_links[facebook]"
                                                                class="form-control mb-2" placeholder="Facebook URL"
                                                                value="{{ old('social_links.facebook', $user->social_links['facebook'] ?? '') }}">


                                                            <label>Twitter</label>

                                                            <input type="text" name="social_links[twitter]"
                                                                class="form-control mb-2" placeholder="Twitter URL"
                                                                value="{{ old('social_links.twitter', $user->social_links['twitter'] ?? '') }}">


                                                            <label>Instagram</label>
                                                            <input type="text" name="social_links[instagram]"
                                                                class="form-control mb-2" placeholder="Instagram URL"
                                                                value="{{ old('social_links.instagram', $user->social_links['instagram'] ?? '') }}">
                                                        </div>
                                                    </div>

                                                </div>







                                                <div class="form-row">
                                                    <div wire:ignore class="form-group col-md-6">
                                                        <label>Featured Image (leave empty to keep current)</label>

                                                        <input type="file" class="dropify" name="avatar" id="avatar"
                                                            data-default-file="{{ $user->avatar ? Storage::url($user->avatar) : '' }}">

                                                        @error('avatar')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
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
        <!-- content-wrapper ends -->

    </div>
@endsection
