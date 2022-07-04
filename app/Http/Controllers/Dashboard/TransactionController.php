<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends DashboardController
{
    public function __invoke()
    {
        $transactions = Transaction::latest()
            ->paginate(15);

        return view(
            'dashboard.transactions.index',
            compact('transactions')
        );
    }
}
