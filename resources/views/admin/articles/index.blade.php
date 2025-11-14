@extends('layouts.admin-app')


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Article table
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Article table</li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Article table</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>User</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>View Count</th>
                                            <th>Status</th>
                                            <th>Created at</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($articles as $article)
                                            <tr>
                                                <td>{{ $article->id }}</td>
                                                <td>{{ $article->user->name }}</td>
                                                <td>{{ $article->title }}</td>
                                                <td>{{ $article->image }}</td>
                                                <td>{{ $article->views_count }}</td>
                                                {{-- <td>{{ $article->category->name }}</td> --}}
                                                {{-- <td>${{ number_format($article->base_price, 2) }}</td>
                            <td>${{ number_format($article->purchased_price, 2) }}</td> --}}
                                                <td>
                                                    <label class="badge badge-info">{{ ucfirst($article->status) }}</label>
                                                </td>
                                                <td>{{ $article->created_at->format('Y/m/d') }}</td>
                                                <td>
                                                    <button class="btn btn-outline-primary">View</button>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                                {{ $articles->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a
                        href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                        class="far fa-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
