<?php

namespace Database\Factories;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'cpf' => str_pad($this->faker->randomNumber(9, true), 11, '0', STR_PAD_LEFT),
            'unit_id' => Unit::inRandomOrder()->first()->id ?? Unit::factory()->create()->id,
         ];
    }
}
