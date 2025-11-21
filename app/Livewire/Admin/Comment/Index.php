<?php

namespace App\Livewire\Admin\Comment;

use App\Models\Comment;
use Livewire\Component;

class Index extends Component
{

    public $deleteId;


    public function render()
    {
        $comments = Comment::get();
        return view('livewire.admin.comment.index', compact(['comments']));
    }


     public function deleteConfirm($id)
    {
        $this->deleteId = $id;
        $this->dispatch('show-delete-modal');
    }

    public function deleteComment()
    {
        $comment = Comment::find($this->deleteId);
        $comment->delete();

        session()->flash('message', 'Comment deleted successfully.');
        $this->dispatch('close-delete-modal');
    }
}
