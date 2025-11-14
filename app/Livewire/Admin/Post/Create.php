<?php

namespace App\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Create extends Component
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
    public $featured_image; // temporary upload
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
        'featured_image' => 'nullable|image|max:2048',
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
            'featured_image','status','published_at','is_featured','is_breaking'
        ]);
        $this->status = 'draft';
        $this->is_featured = false;
        $this->is_breaking = false;
    }


    public function savePost()
    {
        $this->validate();

        $data = [
            'user_id' => auth()->id(),
            'title' => $this->title,
            'slug' => $this->slug ? Str::slug($this->slug) : Str::slug($this->title),
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'category_id' => $this->category_id,
            'status' => $this->status,
            'published_at' => $this->published_at,
            'is_featured' => (bool) $this->is_featured,
            'is_breaking' => (bool) $this->is_breaking,
        ];

        if ($this->featured_image) {
            $data['featured_image'] = $this->featured_image->store('posts', 'public');
        }

        Post::create($data);

        session()->flash('message', 'Post created successfully.');
        $this->resetForm();
return redirect()->route('admin.posts');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.post.create',compact('categories'))->extends('layouts.admin-app')->section('content');
    }




}
