<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends DashboardController
{
    public function __invoke()
    {
        $users = User::take(7)->latest()->get();
        $products = Product::take(3)->latest()->get();
        $orders = Order::withCount('order_products')->take(5)->latest()->get();

        return view('dashboard.index',
            compact('users', 'products', 'orders')
        );
    }
}
