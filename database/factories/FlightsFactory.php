<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Flights; // Use singular name
use App\Models\Planes;  // Use singular name

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightsFactory extends Factory
{
    protected $model = Flights::class;

    public function definition()
    {
        return [
            'from_location' => $this->faker->city,
            'to_location' => $this->faker->city,
            'departure_datetime' => $this->faker->dateTimeBetween('+1 days', '+1 weeks'),
            'arrival_datetime' => $this->faker->dateTimeBetween('+1 weeks', '+2 weeks'),
            'duration' => $this->faker->time(),
            'plane_id' => Planes::factory(),
        ];
    }
}
