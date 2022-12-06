<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->city(),
            'postanski_broj' => $this->faker->postcode(),
            'drzava' => $this->faker->country()
        ];
    }
}
