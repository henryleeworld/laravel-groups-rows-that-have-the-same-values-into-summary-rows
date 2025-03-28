<?php

namespace App\Http\Controllers;

use App\Models\Order;
use DB;

class GroupByAggregateController extends Controller
{
    /**
     * Group by aggregate.
     */
    public function __invoke()
    {
        $orders = Order::query()
            ->select(['user_id', DB::raw('count(*) as total_orders')])
            ->withAggregate('user', 'name')
            ->groupBy('user_id')
            ->get();

        return view('examples.groupByAggregate', [
            'orders' => $orders
        ]);
    }
}
