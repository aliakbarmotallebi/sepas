<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;

class Cart extends Component
{
    /**
     * @var
     */
    public $title;

    /**
     * Create a new component instance.
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.cart');
    }
}
