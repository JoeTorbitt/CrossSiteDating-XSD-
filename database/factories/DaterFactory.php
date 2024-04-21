<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DaterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'age' => rand(18,99),
            'bio' => $this->faker->words(3, true),

        ];
    }
}
