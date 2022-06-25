<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    protected $listeners = ['show' => 'setFlash'];

	public $alertTypeClasses = [
		'success' => ' bg-green-500 text-white',
	    'warning' => ' bg-orange-500 text-white', 
	    'danger'  => ' bg-red-500 text-white', 
	    'info'    => ' bg-blue-500 text-white'
	];


    public $message = 'Notification Message';
	public $alertType = 'success';

	public function setFlash ($message, $alertType)
	{
	    $this->message   = $message;
	    $this->alertType = $alertType;
	    
	    $this->dispatchBrowserEvent('flash');

	}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
