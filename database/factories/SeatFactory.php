<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SeatFactory extends Factory
{
    public function definition()
    {
        return [
            'flight_id' => \App\Models\Flight::factory(),
            'seat_number' => strtoupper($this->faker->bothify('##')),
            'class' => $this->faker->randomElement(['economy', 'business', 'first']),
            'is_available' => $this->faker->boolean,
        ];
    }
}   