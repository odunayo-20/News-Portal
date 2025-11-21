<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithFileUploads, WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name, $slug, $description, $image, $is_featured, $order;
    public $categoryId, $deleteId;
    public $tempImage, $featured_image, $category;

    // protected $rules = [
    //     'name' => 'required|string|max:255|unique:categories,name',
    //     'description' => 'nullable|string',
    //     // 'image' => 'nullable|image|max:1024',
    //     // 'is_featured' => 'boolean',
    //     // 'order' => 'integer'
    // ];

    public function render()
    {
        return view('livewire.admin.category.index', [
            'categories' => Category::orderBy('order')->paginate(10)
        ]);
    }

    public function saveCategory()
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'description' => 'nullable|string',
            // 'featured_image' => 'nullable|image|max:1024',
        ]);

        $data = [
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'description' => $this->description,
        ];
        if ($this->featured_image) {
            $data['featured_image'] = $this->featured_image->store('categories', 'public');
        }

        Category::create($data);

        $this->reset();
        session()->flash('message', 'Category created successfully.');
        $this->dispatch('closeModal');
    }
public function edit($id)
{
    $category = Category::find($id);
    $this->categoryId = $category->id;
    $this->name = $category->name;
    $this->description = $category->description;

    // Reset the featured_image so Dropify shows the correct image
    $this->featured_image = null;

    // Store the current category object for Dropify preview
    $this->category = $category;

    $this->dispatch('editShowModal');
}


    public function updateCategory()
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $this->categoryId,
            'description' => 'nullable|string',
            // 'featured_image' => 'nullable|image|max:1024',
            // 'is_featured' => 'boolean',
            // 'order' => 'integer'
        ]);

        $category = Category::find($this->categoryId);
        $data = [
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'description' => $this->description,
        ];
        if ($this->featured_image) {
            $data['featured_image'] = $this->featured_image->store('categories', 'public');
            if ($category->featured_image) {
                // Delete old image
                Storage::disk('public')->delete($category->featured_image);
            }
        }
        $category->update($data);

        $this->reset();
        session()->flash('message', 'Category updated successfully.');
        $this->dispatch('closeModal');
    }

    public function deleteConfirm($id)
    {
        $this->deleteId = $id;
        $this->dispatch('show-delete-modal');
    }

    public function deleteCategory()
    {
        $category = Category::find($this->deleteId);
        $category->delete();

        session()->flash('message', 'Category deleted successfully.');
        $this->dispatch('close-delete-modal');
    }
}
