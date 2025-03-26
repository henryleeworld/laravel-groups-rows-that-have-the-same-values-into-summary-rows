<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $users = User::factory()->count(100)->create()->pluck('id');
        for ($i = 0; $i < 1_000; $i++) {
            Order::factory()
                ->create([
                    'user_id' => $users->random()
                ]);
        }
    }
}
