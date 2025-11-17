@extends('layouts.admin-app')

@section('content')
<div class="content-wrapper py-4">

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white d-flex align-items-center">
                    <i class="fas fa-envelope me-2"></i>
                    <h5 class="mb-0">Contact Details</h5>
                </div>

                <div class="card-body">

                    <div class="mb-3">
                        <h6 class="text-muted"><i class="fas fa-user me-1"></i> Name</h6>
                        <p class="fw-semibold">{{ $contact->name }}</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="text-muted"><i class="fas fa-at me-1"></i> Email</h6>
                        <p class="fw-semibold">{{ $contact->email }}</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="text-muted"><i class="fas fa-tag me-1"></i> Subject</h6>
                        <p class="fw-semibold">{{ $contact->subject }}</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="text-muted"><i class="fas fa-comment-dots me-1"></i> Message</h6>
                        <p class="fw-normal">{{ $contact->message }}</p>
                    </div>

                </div>

                <div class="card-footer d-flex justify-content-end">
                    <a href="{{ route('admin.contact') }}" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-left me-1"></i> Back to List
                    </a>
                </div>

            </div>

        </div>
    </div>

</div>
@endsection
