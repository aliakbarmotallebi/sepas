<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{

    public ?string $title;

    public ?bool $opening = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = '', $opening = false)
    {
        $this->title = $title;

        $this->opening = $opening;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
