 <!-- Comment Form -->
        @auth
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('comments.store', $post) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="3"
                                placeholder="Write your comment..." required></textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Post Comment</button>
                    </form>
                </div>
            </div>
        @else
            <div class="alert alert-info">
                Please <a href="{{ route('login') }}">login</a> to post a comment.
            </div>
        @endauth

        <!-- Comments List -->
        @foreach ($post->comments as $comment)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('storage/'. $comment->user->avatar)}}"
                            alt="{{ $comment->user->name }}" class="rounded-circle me-3" width="40" height="40">
                        <div class="flex-grow-1">
                            <strong>{{ $comment->user->name }}</strong>
                            <small class="text-muted ms-2">{{ $comment->created_at->diffForHumans() }}</small>
                            <p class="mt-2 mb-0">{{ $comment->content }}</p>

                            @auth
                                @if (auth()->id() === $comment->user_id || auth()->user()->isAdmin())
                                    <form action="{{ route('comments.delete', $comment) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-link text-danger p-0"
                                            onclick="return confirm('Delete this comment?')">
                                            Delete
                                        </button>
                                    </form>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
