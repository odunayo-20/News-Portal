<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Notification;

class NotificationBell extends Component
{
    public function render()
    {
        return view('livewire.admin.notification-bell');
    }

    public $notifications;
    public $unreadCount;

    protected $listeners = ['refreshNotifications' => 'loadNotifications'];

    public function mount()
    {
        $this->loadNotifications();
    }

    public function loadNotifications()
    {
        $this->notifications = Notification::where('user_id', auth()->id())
            ->latest()
            ->take(5)
            ->get();

        $this->unreadCount = Notification::where('user_id', auth()->id())
            ->whereNull('read_at')
            ->count();
    }

    public function markAsRead($id)
    {
        $notification = Notification::where('user_id', auth()->id())->findOrFail($id);
        $notification->update(['read_at' => now()]);

        $this->loadNotifications(); // refresh
    }

    public function markAllRead()
    {
        Notification::where('user_id', auth()->id())
            ->whereNull('read_at')
            ->update(['read_at' => now()]);

        $this->loadNotifications();
    }

}
