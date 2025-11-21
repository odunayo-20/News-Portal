<?php

namespace App\Livewire\Frontend;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PostLike extends Component
{
    public function render()
    {
        return view('livewire.frontend.post-like');
    }

     public $post;
    public $liked;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->liked = $post->likedByUser(Auth::id());
    }

    public function toggleLike()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if ($this->liked) {
            $this->post->likes()->detach(Auth::id());
            $this->liked = false;
        } else {
            $this->post->likes()->attach(Auth::id());
            $this->liked = true;
        }

        // Refresh like count
        $this->post->refresh();
    }
}
