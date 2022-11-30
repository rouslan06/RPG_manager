<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personnage>
 */
class PersonnageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'magie' => $this->faker->unique()->randomNumber(2),
            'force' => $this->faker->unique()->randomNumber(2),
            'agilite' => $this->faker->unique()->randomNumber(2),
            'intelligence' => $this->faker->unique()->randomNumber(2),
            'PV' => $this->faker->unique()->randomNumber(2),
        ];
    }
}
