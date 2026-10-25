<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\EmployeeTimesheet;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<EmployeeTimesheet>
 */
#[UseModel(EmployeeTimesheet::class)]
class EmployeeTimesheetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startTime = fake()->dateTimeBetween('-2 weeks');
        return [
            'employee_id' => Employee::factory(),
            'start' => $startTime,
            'end' => fake()->dateTimeBetween($startTime, $startTime->format('Y-m-d H:i:s').' + 8 hours'),
        ];
    }
}
