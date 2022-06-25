<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Delete extends Component
{
    public $entity;

    public $url;

    public function mount($entity, $url)
    {
        $this->entity = $entity;
        $this->url = $url;
    }

    public function remove()
    {
        $this->entity->delete();

        return redirect($this->url);
    }

    public function render()
    {
        return view('livewire.delete');
    }
}
