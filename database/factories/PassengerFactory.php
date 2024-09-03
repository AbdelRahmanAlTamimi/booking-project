<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PassengerFactory extends Factory
{
    public function definition()
    {
        return [
            'booking_id' => \App\Models\Booking::factory(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->date,
            'passport_number' => strtoupper($this->faker->unique()->bothify('??######')),
        ];
    }
}