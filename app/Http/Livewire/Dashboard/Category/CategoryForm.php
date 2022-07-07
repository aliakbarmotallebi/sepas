<?php

namespace App\Http\Livewire\Dashboard\Category;

use App\Http\Livewire\Modal;
use App\Models\Category;
use Livewire\Component;

class CategoryForm extends Modal
{
    public $label;

    public $category_id;

    public $categories;

    public $isSuccess = false;

    public $temp;

    protected $rules = [
        'label'=>'required|unique:categories,label',
        'category_id'=>'sometimes',
    ];

    private function resetInput()
    {
        $this->label = null;
        $this->category_id = null;
    }

    public function updatingLabel()
    {
        $this->isSuccess = false;
        $this->temp = null;

    }

    public function store()
    {
        $this->validate();

        Category::create([
            'label'     => $this->label,
            'parent_id' => $this->category_id,
        ]);

        $this->isSuccess = true;
    
        $this->temp = $this->label;
    
        $this->resetInput();

        $this->emit('refreshCategoriesList');
    
    }

    public function render()
    {
        $this->categories = Category::get();

        return view('livewire.dashboard.category.category-form');
    }
}
