<?php

namespace App\Http\Livewire\Dashboard\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryForm extends Component
{
    public $label;

    public $category_id;

    public $categories;

    public $isOpenModal = false;

    protected $rules = [
        'label'=>'required|unique:categories,label',
        'category_id'=>'sometimes'
    ];

    protected $listeners = [
        'openerModal' => 'updatedIsOpenModal',
        'restModal'   => 'updatedIsOpenModal'
    ];
 
    public function updatedIsOpenModal()
    {
        $this->isOpenModal = !$this->isOpenModal;
    }

    private function resetInput()
    {
        $this->label = null;
        $this->category_id = null;
    }

    public function store()
    {
        $this->validate();

        Category::create([
            'label'     => $this->label,
            'parent_id' => $this->category_id
        ]);

        return redirect()->to('/dashboard/categories');
    }

    public function render()
    {
        $this->categories = Category::get();
        return view('livewire.dashboard.category.category-form');
    }
}
