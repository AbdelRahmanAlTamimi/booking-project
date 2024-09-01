<?php

namespace Database\Factories;
use App\Models\Seats;
use App\Models\Flights;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seats>
 */
class SeatsFactory extends Factory
{
    protected $model = Seats::class;

    public function definition()
    {
        return [
            'flight_id' => Flights::factory(),
            'seat_number' => $this->faker->regexify('[A-Z][0-9]{1,2}'),
            'seat_class' => $this->faker->randomElement(['Economy', 'Business', 'First']),
        ];
    }
}
