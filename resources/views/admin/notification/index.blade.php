@extends('layouts.admin-app')

@section('content')
<div class="content-wrapper">

    <div class="d-flex justify-content-between mb-3">
        <h4>Your Notifications</h4>

        <form action="{{ route('notifications.markAll') }}" method="POST">
            @csrf
            <button class="btn btn-sm btn-primary">Mark All Read</button>
        </form>
    </div>

    <div class="card">
        <div class="card-body">

            @foreach($notifications as $note)
                @php $data = json_decode($note->data, true); @endphp

                <div class="border-bottom py-3" style="{{ $note->read_at ? 'opacity:0.6' : 'font-weight:bold' }}">
                    <p>
                        @if($note->type == 'comment')
                            <strong>{{ $data['commenter'] }}</strong> commented on your post:
                            <em>{{ $data['post_title'] }}</em>
                        @else
                            New activity on:
                            <em>{{ $data['post_title'] }}</em>
                        @endif
                    </p>

                    <p class="text-muted">{{ $data['comment'] }}</p>

                    <form action="{{ route('notifications.markRead', $note->id) }}" method="POST">
                        @csrf
                        <button class="btn btn-sm btn-outline-secondary">Mark Read</button>
                    </form>
                </div>
            @endforeach

            <div class="mt-3">
                {{ $notifications->links() }}
            </div>
        </div>
    </div>

</div>
@endsection
