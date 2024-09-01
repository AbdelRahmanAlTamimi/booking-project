<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    public function definition()
    {
        return [
            'flight_number' => strtoupper($this->faker->unique()->bothify('??###')),
            'departure_airport_id' => \App\Models\Airport::factory(),
            'arrival_airport_id' => \App\Models\Airport::factory(),
            'aircraft_id' => \App\Models\Aircraft::factory(),
            'base_price' => $this->faker->randomFloat(2, 50, 1000),
            'capacity' => $this->faker->numberBetween(100, 300),
        ];
    }
}