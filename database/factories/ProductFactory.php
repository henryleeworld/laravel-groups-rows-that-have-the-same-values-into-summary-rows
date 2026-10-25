<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
#[UseModel(Product::class)]
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $names = collect([
            'Computer',
            'Laptop',
            'Phone',
            'Tablet',
            'Watch',
            'TV',
            'Camera',
            'Headphones',
            'Keyboard',
            'Mouse',
            'Monitor',
            'Printer',
            'Speaker',
            'Projector',
            'Router',
            'Modem',
            'Server',
            'Microwave',
            'Refrigerator',
            'Oven',
            'Dishwasher',
        ]);
        return [
            'name' => $names->random() . ' - ' . random_int(1, 1000),
            'price' => fake()->randomFloat(2, 10, 1000),
            'stock_quantity' => random_int(1, 3000),
        ];
    }
}
