<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AirportFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'iata_code' => strtoupper($this->faker->unique()->lexify('???')),
        ];
    }
}