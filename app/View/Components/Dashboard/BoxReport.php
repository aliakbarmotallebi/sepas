<?php

namespace App\View\Components\Dashboard;

use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Illuminate\View\Component;

class BoxReport extends Component
{
    public $countAdmins;

    public $countUsers;

    public $countPaid;

    public $countUnpaid;

    public $countProducts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->countAdmins = User::whereRole(User::ADMIN_ROLE)->count();
        $this->countUsers = User::whereRole(User::USER_ROLE)->count();
        $this->countPaid = Payment::whereStatus(Payment::PENDING_STATUS)->sum('amount');
        $this->countUnpaid = Payment::whereStatus(Payment::COMPLETED_STATUS)->sum('amount');
        $this->countProducts    = Product::count();

        return view('components.dashboard.box-report');
    }
}
