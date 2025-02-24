<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Flag;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unit>
 */
class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'fantasy_name' => $this->faker->company,
            'corporate_name' => $this->faker->company,
            'cnpj' => str_pad($this->faker->randomNumber(8, true) . $this->faker->randomNumber(6, true), 14, '0', STR_PAD_LEFT),
            'flag_id' => Flag::inRandomOrder()->first()->id ?? Flag::factory()->create()->id,

        ];
    }
}
