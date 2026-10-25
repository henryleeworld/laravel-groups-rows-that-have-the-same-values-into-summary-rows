<?php

namespace Database\Factories;

use App\Enum\OrderStatus;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends Factory<Order>
 */
#[UseModel(Order::class)]
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pre_tax = fake()->randomFloat(2, 5, 10_000);
        $tax = $pre_tax * 0.21;
        $orderTime = fake()->dateTimeBetween(now()->subMonths(6), now());
        return [
            'user_id' => User::factory(),
            'status' => collect(OrderStatus::getValues())->random(),
            'order_time' => $orderTime,
            'delivery_time' => fake()->dateTimeBetween($orderTime, Carbon::parse($orderTime)->addMonth()),
            'pre_tax' => $pre_tax,
            'tax' => $tax,
            'total' => $pre_tax + $tax,
        ];
    }
}
