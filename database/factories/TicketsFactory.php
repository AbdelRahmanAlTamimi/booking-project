<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tickets;
use App\Models\Passengers; 
use App\Models\Seats;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tickets>
 */
class TicketsFactory extends Factory
{
    protected $model = Tickets::class;

    public function definition()
    {
        return [
            'passenger_id' => Passengers::factory(),
            'seat_id' => Seats::factory(),
            'price' => $this->faker->numberBetween(100, 1000), 
            'status' => $this->faker->randomElement(['booked', 'cancelled', 'pending']),
            'booking_date' => $this->faker->dateTimeThisYear(),
        ];
    }
}
