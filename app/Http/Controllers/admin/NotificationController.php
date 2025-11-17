<?php

namespace App\Http\Controllers\Admin;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
  


     public function index()
    {
        $notifications = Notification::where('user_id', auth()->id())
            ->latest()
            ->paginate(15);

        return view('admin.notification.index', compact('notifications'));
    }

    public function markRead($id)
    {
        $notification = Notification::where('user_id', auth()->id())->findOrFail($id);

        $notification->update([
            'read_at' => now(),
        ]);

        return back();
    }

    public function markAllRead()
    {
        Notification::where('user_id', auth()->id())
            ->whereNull('read_at')
            ->update(['read_at' => now()]);

        return back();
    }
}
