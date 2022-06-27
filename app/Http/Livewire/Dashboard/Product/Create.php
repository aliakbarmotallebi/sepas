<?php

namespace App\Http\Livewire\Dashboard\Product;

use App\Models\Product;
use Livewire\Component;

class Create extends Component
{
    public Product $product;

    public function render()
    {
        return view('livewire.dashboard.product.create');
    }
}
