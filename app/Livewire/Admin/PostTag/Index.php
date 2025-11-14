<?php

namespace App\Livewire\Admin\PostTag;

use App\Models\Tag;
use App\Models\Post;
use Dotenv\Util\Str;
use App\Models\PostTag;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rule as ValidationRule;

class Index extends Component
{

      use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $post_tag_id;
    public $post_id;
    public $tag_id;

    protected $rules = [
        'post_id' => 'required|exists:posts,id',
        'tag_id' => 'required|exists:tags,id',
    ];

    protected $listeners = ['resetForm' => 'resetForm'];

    public function resetForm()
    {
        $this->reset(['post_id', 'tag_id']);
    }

    public function openCreateModal()
    {
        $this->resetForm();
        $this->dispatch('openCreateModal');
    }

    // Save using component state
    public function savePostTag()
    {
        $this->validate();
        PostTag::create([
            'post_id' => $this->post_id,
            'tag_id' => $this->tag_id,
        ]);
        session()->flash('message', 'Post Tag created successfully.');
        $this->resetForm();
        $this->dispatch('closeModal');
    }

    // Load tag into state and open edit modal
    public function edit($id)
    {
        $postTag = PostTag::find($id);
        if ($postTag) {
            $this->tag_id = $postTag->tag_id;
            $this->post_id = $postTag->post_id;
            $this->post_tag_id = $id;
            $this->dispatch('openEditModal');
        }
    }

    // Update using component state
    public function updatePostTag()
    {

//         $this->validate([
//     'post_id' => ['required', 'exists:posts,id'],
//     'tag_id' => [
//         'required',
//         'exists:tags,id',
//         Rule::unique('post_tags')
//             ->where(fn($query) => $query->where('post_id', $this->post_id))
//             ->ignore($this->post_tag_id ?? null),
//     ],
// ]);


        $postTag = PostTag::find($this->post_tag_id);
        // dd($postTag);
        if ($postTag) {
            $postTag->update([
                'post_id' => $this->post_id,
                'tag_id' => $this->tag_id,
            ]);
            session()->flash('message', 'Post Tag updated successfully.');
            $this->resetForm();
            $this->dispatch('closeModal');
        }
    }

    
    public function deleteConfirm($id)
    {
        $this->post_tag_id = $id;
        $this->dispatch('show-delete-modal');
    }

    public function deletePostTag()
    {
        $postTag = PostTag::find($this->post_tag_id);
        if ($postTag) {
            $postTag->delete();
            session()->flash('message', 'Post Tag deleted successfully.');
        }
        $this->post_tag_id = null;
        $this->dispatch('close-delete-modal');
    }


    public function render()
    {
        $postTags = PostTag::latest()->paginate(10);
        $tags = Tag::latest()->get();
        // Return the wrapper view so it receives $tags (the wrapper includes the index view)
        $posts = Post::latest()->get();
        return view('livewire.admin.post-tag.index', compact('postTags', 'tags', 'posts'))->extends('layouts.admin-app')->section('content');
    }
}
