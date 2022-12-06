<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kompanija;
use App\Models\Grad;

class ZaposleniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'pozicija' => $this->faker->jobTitle(),
            'pol' => $this->faker->randomElement(['male', 'female']),
            'email' => $this->faker->unique()->email(),
            'kontakt' => $this->faker->unique()->e164PhoneNumber(),
            'kompanija_id' => Kompanija::factory(),
            'grad_id' => Grad::factory()

        ];
    }
}
