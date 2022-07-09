<?php

namespace App\Http\Livewire\Dashboard\Category;

use App\Http\Livewire\Modal;
use App\Models\Category;

class CategoryEdit extends Modal
{
    public $label;

    public $category_id;

    public $categories;

    public $old_cat;

    public $isSuccess = false;

    public $temp;

    protected $listeners = [
        'edit' => 'edit'
    ];

    protected $rules = [
        'label'=>'required',
        'category_id'=>'sometimes',
    ];

    private function resetInput()
    {
        $this->label = null;
        $this->category_id = null;
    }


    public function edit($category)
    {
        $category = json_decode($category,true);
        
        $this->show();
        $this->label = $category['label'];
        $this->category_id = $category['parent_id'];
        $this->old_cat = $category['id'];

    }


    public function update($old_cat)
    {
        $this->validate();
        //
        $category = Category::findOrFail($old_cat);
        $category->label = $this->label;
        $category->parent_id = $this->category_id;
        $category->save();

        $this->isSuccess = true;
    
        $this->temp = $this->label;

        $this->show();
        
        $this->emit('refreshCategoriesList');

        $this->isSuccess = false;

    }

    public function render()
    {
        $this->categories = Category::get();

        return view('livewire.dashboard.category.category-edit');
    }
}
