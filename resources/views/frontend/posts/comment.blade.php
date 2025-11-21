<!-- =========================
     COMMENT FORM
========================= -->
<div class="comments-section mt-5">

    @auth
        <div class="card shadow-sm mb-4 border-0">
            <div class="card-body">

                <h5 class="mb-3">Leave a Comment</h5>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>

                @endif

                <form action="{{ route('comments.store', $post) }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <textarea
                            name="content"
                            rows="3"
                            class="form-control @error('content') is-invalid @enderror"
                            placeholder="Write your comment..."
                            required></textarea>

                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-sm">
                        <i class="fa fa-paper-plane"></i> Post Comment
                    </button>
                </form>

            </div>
        </div>

    @else
        <div class="alert alert-info">
            Please <a href="{{ route('login') }}">login</a> to post a comment.
        </div>
    @endauth


    <!-- =========================
         COMMENTS LIST
    ========================= -->
    <h5 class="mt-4 mb-3">{{ $post->comments->count() }} Comments</h5>

    @forelse ($post->comments as $comment)
        <div class="card mb-3 border-0 shadow-sm">
            <div class="card-body">

                <div class="d-flex">

                    <!-- Avatar -->
                    <img
                        src="{{ asset('storage/' . $comment->user->avatar) }}"
                        alt="{{ $comment->user->name }}"
                        class="rounded-circle me-3"
                        style="width: 45px; height: 45px; object-fit: cover;">

                    <div class="flex-grow-1">

                        <!-- Name & Date -->
                        <div class="d-flex align-items-center mb-1">
                            <strong>{{ $comment->user->name }}</strong>
                            <small class="text-muted ms-2">
                                {{ $comment->created_at->diffForHumans() }}
                            </small>
                        </div>

                        <!-- Comment -->
                        <p class="mb-2">{{ $comment->content }}</p>

                        <!-- Delete (If Author/Admin) -->
                        @auth
                            @if (auth()->id() === $comment->user_id || auth()->user()->isAdmin())
                                <form action="{{ route('comments.delete', $comment) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        class="btn btn-link text-danger btn-sm p-0"
                                        onclick="return confirm('Delete this comment?')">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            @endif
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    @empty
        <p class="text-muted">No comments yet. Be the first to comment!</p>
    @endforelse

</div>
