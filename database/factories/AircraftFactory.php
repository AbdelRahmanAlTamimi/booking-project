<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AircraftFactory extends Factory
{
    public function definition()
    {
        return [
            'registration_number' => strtoupper($this->faker->unique()->bothify('??-####')),
            'model' => $this->faker->word,
            'manufacturer' => $this->faker->company,
            'total_seats' => $this->faker->numberBetween(100, 300),
            'economy_seats' => $this->faker->numberBetween(80, 200),
            'business_seats' => $this->faker->numberBetween(10, 50),
            'first_class_seats' => $this->faker->numberBetween(5, 20),
            'manufacture_date' => $this->faker->date,
            'last_maintenance_date' => $this->faker->date,
            'is_active' => $this->faker->boolean,
        ];
    }
}