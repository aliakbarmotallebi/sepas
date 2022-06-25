<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Status extends Component
{
    public $entity;

    public function mount($entity)
    {
        $this->entity = $entity;
    }

    public function setStatus()
    {
        $this->entity->hasPublished() ?
        $this->entity->setUnPublished() :
        $this->entity->setPublished();

    }


    public function render()
    {
        return view('livewire.status');
    }
}
