<?php

namespace App\Livewire\Admin\Tag;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $deleteId;
    public $name;
    public $tagId;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    protected $listeners = ['resetForm' => 'resetForm'];

    public function resetForm()
    {
        $this->reset(['name', 'tagId']);
    }

    public function openCreateModal()
    {
        $this->resetForm();
        $this->dispatch('openCreateModal');
    }

    // Save using component state
    public function saveTag()
    {
        $this->validate();
        Tag::create([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
        ]);
        session()->flash('message', 'Tag created successfully.');
        $this->resetForm();
        $this->dispatch('closeModal');
    }

    // Load tag into state and open edit modal
    public function edit($id)
    {
        $tag = Tag::find($id);
        if ($tag) {
            $this->tagId = $tag->id;
            $this->name = $tag->name;
            $this->dispatch('openEditModal');
        }
    }

    // Update using component state
    public function updateTag()
    {
        $this->validate();
        $tag = Tag::find($this->tagId);
        if ($tag) {
            $tag->update([
                'name' => $this->name,
                'slug' => Str::slug($this->name),
            ]);
            session()->flash('message', 'Tag updated successfully.');
            $this->resetForm();
            $this->dispatch('closeModal');
        }
    }

    public function deleteConfirm($id)
    {
        $this->deleteId = $id;
        $this->dispatch('show-delete-modal');
    }

    public function deleteTag()
    {
        $tag = Tag::find($this->deleteId);
        if ($tag) {
            $tag->delete();
            session()->flash('message', 'Tag deleted successfully.');
        }
        $this->deleteId = null;
        $this->dispatch('close-delete-modal');
    }

    public function render()
    {
        $tags = Tag::latest()->paginate(10);
        // Return the wrapper view so it receives $tags (the wrapper includes the index view)
        return view('livewire.admin.tag', compact('tags'));
    }
}
