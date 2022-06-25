<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Delete extends Component
{
    public function remove()
    {
        sleep(20);
        dd('d');
    }

    public function render()
    {
        return view('livewire.delete');
    }
}
