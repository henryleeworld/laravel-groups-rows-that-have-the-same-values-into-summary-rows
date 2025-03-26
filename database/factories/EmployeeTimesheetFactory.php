<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\EmployeeTimesheet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeTimesheet>
 */
class EmployeeTimesheetFactory extends Factory
{
    protected $model = EmployeeTimesheet::class;

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
