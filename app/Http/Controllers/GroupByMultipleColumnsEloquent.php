<?php

namespace App\Http\Controllers;

use App\Models\Order;
use DB;

class GroupByMultipleColumnsEloquent extends Controller
{
    public function __invoke()
    {
        $orders = Order::query()
            //->select('id')
            ->addSelect(DB::raw('month(orders.order_time) as month'))
            ->addSelect(DB::raw('count(*) as total_orders'))
            ->addSelect(DB::raw('sum(total) as order_total'))
            ->with('products')
            ->withAggregate('products', 'name')
            ->groupByRaw('month(orders.order_time)')
            ->groupBy('products_name')
            ->orderBy('month')
            ->orderBy('total_orders', 'desc')
            ->get()
            ->reject(function($orders) {
                return !$orders->products_name; 
            });

        return view('examples.groupByMultipleColumnsEloquent', [
            'orders' => $orders
        ]);
    }
}
