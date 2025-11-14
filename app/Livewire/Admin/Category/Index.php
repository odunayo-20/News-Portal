<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class Index extends Component
{
    use \Livewire\WithFileUploads;

    public $name, $slug, $description, $image, $is_featured, $order;
    public $categoryId, $deleteId;
    public $tempImage;

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
            'categories' => Category::orderBy('order')->get()
        ]);
    }

    public function saveCategory()
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'description' => 'nullable|string',
        ]);

        $data = [
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'description' => $this->description,
        ];


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
        // $this->is_featured = $category->is_featured;
        // $this->order = $category->order;

            $this->dispatch('editShowModal');
    }

    public function updateCategory()
    {
        $this->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $this->categoryId,
            'description' => 'nullable|string',
            // 'image' => 'nullable|image|max:1024',
            // 'is_featured' => 'boolean',
            // 'order' => 'integer'
        ]);

        $category = Category::find($this->categoryId);
        $category->update([
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'description' => $this->description,
        ]);


        // if ($this->tempImage) {
        //     $data['image'] = $this->tempImage->store('categories', 'public');
        // }


        $this->reset();
        session()->flash('message', 'Category updated successfully.');
        $this->dispatch('closeModal');
    }

    public function deleteConfirm($id)
    {
        $this->deleteId = $id;
        $this->dispatch('showDeleteModal');
    }

    public function deleteCategory()
    {
        $category = Category::find($this->deleteId);
        $category->delete();

        session()->flash('message', 'Category deleted successfully.');
        $this->dispatch('closeModal');
    }
}
