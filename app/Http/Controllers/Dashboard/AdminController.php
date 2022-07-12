<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Notifications\NotificationWithSms;
use App\Services\SmsMessage;
use Illuminate\Http\Request;

class AdminController extends DashboardController
{
    public function __invoke()
    {
        // return (new SmsMessage())
        //         ->to("09306193414")
        //         ->inputs([
        //             "username" => "aliakbar"
        //         ])->send();

        return User::first()->notify(new NotificationWithSms(
            ["username" => "ali"]
        ));



        $users = User::take(7)->latest()->get();
        $products = Product::take(4)->latest()->get();
        $orders = Order::withCount('order_products')->take(5)->latest()->get();

        return view('dashboard.index',
            compact('users', 'products', 'orders')
        );
    }
}
