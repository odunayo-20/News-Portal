<li class="nav-item dropdown" wire:poll.10s="loadNotifications">
    <a class="nav-link count-indicator dropdown-toggle" href="#" data-toggle="dropdown">
        <i class="fas fa-bell"></i>
        @if($unreadCount > 0)
            <span class="count">{{ $unreadCount }}</span>
        @endif
    </a>

    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list">

        <a class="dropdown-item">
            <p class="mb-0 font-weight-normal float-left">
                You have {{ $unreadCount }} new notification{{ $unreadCount != 1 ? 's' : '' }}
            </p>
            <span class="badge badge-pill badge-warning float-right" wire:click="markAllRead" style="cursor:pointer">
                Mark All Read
            </span>
        </a>

        <div class="dropdown-divider"></div>

        @forelse($notifications as $note)
            @php $data = json_decode($note->data, true); @endphp
            <a class="dropdown-item preview-item" href="{{ route('admin.notification') }}"
               style="{{ $note->read_at ? 'opacity:0.6' : 'font-weight:bold' }}">
                <div class="preview-thumbnail">
                    <div class="preview-icon {{ $note->type === 'comment' ? 'bg-info' : 'bg-warning' }}">
                        <i class="fas fa-comment"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-medium">
                        {{ $note->type === 'comment' ? $data['commenter'].' commented on your post' : $data['post_title'] }}
                    </h6>
                    <p class="font-weight-light small-text">
                        {{ $note->created_at->diffForHumans() }}
                    </p>

                    <button class="btn btn-sm btn-link p-0" wire:click="markAsRead('{{ $note->id }}')">Mark Read</button>
                </div>
            </a>
            <div class="dropdown-divider"></div>
        @empty
            <a class="dropdown-item preview-item">
                <p class="mb-0 font-weight-light small-text text-center">No notifications</p>
            </a>
        @endforelse

    </div>
</li>
