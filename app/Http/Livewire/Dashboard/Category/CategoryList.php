<?php

namespace App\Http\Livewire\Dashboard\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{
    public $categories;

    protected $listeners = ['refreshCategoriesList' => '$refresh'];

    public function remove(Category $category)
    {
        $category->delete();
        $this->emit('refreshCategoriesList');
    }

    public function render()
    {
        $this->categories = Category::whereNull('parent_id')->with('childs')->get();

        return view('livewire.dashboard.category.category-list');
    }
}
