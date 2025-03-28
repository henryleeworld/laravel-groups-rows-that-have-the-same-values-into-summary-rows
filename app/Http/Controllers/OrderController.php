<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Order.
     */
    public function __invoke()
    {
        $orders = Order::query()
            ->with('user')
            ->get();

        return view('orders.dashboard', [
            'orders' => $orders
        ]);
    }
}
