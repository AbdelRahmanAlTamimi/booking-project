<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'flight_id' => \App\Models\Flight::factory(),
            'flight_schedule_id' => \App\Models\FlightSchedule::factory(),
            'booking_date' => $this->faker->date,
            'status' => $this->faker->randomElement(['confirmed', 'cancelled']),
        ];
    }
}