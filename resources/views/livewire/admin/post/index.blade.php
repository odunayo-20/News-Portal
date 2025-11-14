<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-center mb-4">
						<h4 class="card-title mb-0">Posts</h4>
						<a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-sm">
							<i class="fas fa-plus"></i> Add New Post
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

					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Image</th>
									<th>Category</th>
									<th>Status</th>
									<th>Published</th>
									<th style="width:140px">Action</th>
								</tr>
							</thead>
							<tbody>
								@forelse($posts as $post)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $post->title }}</td>
                                        <td><img src="{{ Storage::url($post->featured_image) }}" width="100" /></td>

										<td>{{ $post->category ? $post->category->name : '-' }}</td>
										<td>{{ ucfirst($post->status) }}</td>
										<td>{{ $post->published_at ? $post->published_at->format('d M Y') : '-' }}</td>
										<td>
											<a href="{{ route("admin.posts.edit", $post->slug) }}" class="btn btn-sm btn-info" title="Edit">
												<i class="fas fa-edit"></i>
											</a>
											<a href="{{ route("admin.posts.show", $post->slug) }}" class="btn btn-sm btn-info" title="Show">
												<i class="fas fa-eye"></i>
											</a>
											<button wire:click="deleteConfirm({{ $post->id }})" class="btn btn-sm btn-danger" title="Delete">
												<i class="fas fa-trash"></i>
											</button>
										</td>
									</tr>
								@empty
									<tr>
										<td colspan="6" class="text-center">No posts found.</td>
									</tr>
								@endforelse
							</tbody>
						</table>
					</div>

					<div class="mt-3">
						{{ $posts->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('livewire.admin.post.modal')
</div>
