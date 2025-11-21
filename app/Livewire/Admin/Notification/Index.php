<?php

namespace App\Livewire\Admin\Notification;

use App\Models\Notification;
use Livewire\Component;

class Index extends Component
{
public $deleteId;


     public function render()
    {
        $notifications = Notification::get();
        return view('livewire.admin.notification.index', compact(['notifications']));
    }

     public function deleteConfirm($id)
    {
        $this->deleteId = $id;
        $this->dispatch('show-delete-modal');
    }

    public function deleteNotification()
    {
        $Notification = Notification::find($this->deleteId);
        $Notification->delete();

        session()->flash('message', 'Notification deleted successfully.');
        $this->dispatch('close-delete-modal');
    }
}
