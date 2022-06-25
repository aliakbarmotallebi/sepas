<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Delete extends Component
{
    public $deleteId = '';

    public function setId($id)
    {
        $this->deleteId = $id;
    }

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
