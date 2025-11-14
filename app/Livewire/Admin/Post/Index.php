<?php

namespace App\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    // form state
    public $postId;
    public $title;
    public $slug;
    public $excerpt;
    public $content;
    public $category_id;
    public $tempImage; // temporary upload
    public $status = 'draft';
    public $published_at;
    public $is_featured = false;
    public $is_breaking = false;

    public $deleteId;

    protected $rules = [
        'title' => 'required|string|max:255',
        'excerpt' => 'nullable|string',
        'content' => 'required|string',
        'category_id' => 'required|exists:categories,id',
        'tempImage' => 'nullable|image|max:2048',
        'status' => 'required|in:draft,published,scheduled',
        'published_at' => 'nullable|date',
        'is_featured' => 'boolean',
        'is_breaking' => 'boolean',
    ];

    protected $listeners = ['resetForm' => 'resetForm'];

    public function resetForm()
    {
        $this->reset([
            'postId','title','slug','excerpt','content','category_id',
            'tempImage','status','published_at','is_featured','is_breaking'
        ]);
        $this->status = 'draft';
        $this->is_featured = false;
        $this->is_breaking = false;
    }

    public function render()
    {
        $posts = Post::with('category')->latest()->paginate(10);
        // provide categories for the form
        $categories = Category::orderBy('name')->get();
        return view('livewire.admin.post.index', compact('posts','categories'));
    }

    // public function openCreateModal()
    // {
    //     $this->resetForm();
    //     $this->dispatch('openCreatePostModal');
    // }

    // public function savePost()
    // {
    //     $this->validate();

    //     $data = [
    //         'user_id' => auth()->id(),
    //         'title' => $this->title,
    //         'slug' => $this->slug ? Str::slug($this->slug) : Str::slug($this->title),
    //         'excerpt' => $this->excerpt,
    //         'content' => $this->content,
    //         'category_id' => $this->category_id,
    //         'status' => $this->status,
    //         'published_at' => $this->published_at,
    //         'is_featured' => (bool) $this->is_featured,
    //         'is_breaking' => (bool) $this->is_breaking,
    //     ];

    //     if ($this->tempImage) {
    //         $data['featured_image'] = $this->tempImage->store('posts', 'public');
    //     }

    //     Post::create($data);

    //     session()->flash('message', 'Post created successfully.');
    //     $this->resetForm();
    //     $this->dispatch('closePostModal');
    // }

    // public function edit($id)
    // {
    //     $post = Post::find($id);
    //     if (! $post) {
    //         session()->flash('message', 'Post not found.');
    //         return;
    //     }

    //     $this->postId = $post->id;
    //     $this->title = $post->title;
    //     $this->slug = $post->slug;
    //     $this->excerpt = $post->excerpt;
    //     $this->content = $post->content;
    //     $this->category_id = $post->category_id;
    //     $this->status = $post->status;
    //     $this->published_at = $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : null;
    //     $this->is_featured = (bool) $post->is_featured;
    //     $this->is_breaking = (bool) $post->is_breaking;
    //     // tempImage left null — keep existing featured_image until replaced

    //     $this->dispatch('openEditPostModal');
    // }

    // // public function updatePost()
    // // {
    // //     $this->validate();

    // //     $post = Post::find($this->postId);
    // //     if (! $post) {
    // //         session()->flash('message', 'Post not found.');
    // //         return;
    // //     }

    // //     $data = [
    // //         'user_id' => auth()->id(),
    // //         'title' => $this->title,
    // //         'slug' => $this->slug ? Str::slug($this->slug) : Str::slug($this->title),
    // //         'excerpt' => $this->excerpt,
    // //         'content' => $this->content,
    // //         'category_id' => $this->category_id,
    // //         'status' => $this->status,
    // //         'published_at' => $this->published_at,
    // //         'is_featured' => (bool) $this->is_featured,
    // //         'is_breaking' => (bool) $this->is_breaking,
    // //     ];

    // //     if ($this->tempImage) {
    // //         $data['featured_image'] = $this->tempImage->store('posts', 'public');
    // //     }

    // //     $post->update($data);

    // //     session()->flash('message', 'Post updated successfully.');
    // //     $this->resetForm();
    // //     $this->dispatch('closePostModal');
    // // }

    public function deleteConfirm($id)
    {
        // dd('fdfdf');
        $this->deleteId = $id;
        $this->dispatch('openDeleteModal');
    }

    public function deletePost()
    {
        $post = Post::find($this->deleteId);
        if ($post) {
            if ($post->featured_image) {
                // Delete old image
                Storage::disk('public')->delete($post->featured_image);
            }
            $post->delete();
            session()->flash('message', 'Post deleted successfully.');
        }
        $this->deleteId = null;
        $this->dispatch('closeDeleteModal');
    }
}
