<?php

namespace App\Http\Controllers;

use App\Models\Order;

class GroupByRelatedColumnControllerWithEloquent extends Controller
{
    /**
     * Group by related column with eloquent.
     */
    public function __invoke()
    {
        $orders = Order::selectRaw(
            'users.name as user_name, sum(orders.total) as order_total, count(order_product.product_id) as total_products'
        )
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('order_product', 'order_product.order_id', '=', 'orders.id')
            ->groupBy('user_name')
            ->get();

        return view('examples.groupByRelatedColumnEloquent', [
            'orders' => $orders
        ]);
    }
}
