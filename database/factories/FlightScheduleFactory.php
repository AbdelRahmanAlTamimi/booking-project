<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FlightScheduleFactory extends Factory
{
    public function definition()
    {
        return [
            'flight_id' => \App\Models\Flight::factory(),
            'day_of_week' => $this->faker->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']),
            'departure_time' => $this->faker->time,
            'arrival_time' => $this->faker->time,
            'effective_from' => $this->faker->date,
            'effective_to' => $this->faker->optional()->date,
            'is_active' => $this->faker->boolean,
        ];
    }
}