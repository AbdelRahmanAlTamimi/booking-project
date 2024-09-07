<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tickets;
use App\Models\Passengers;
use App\Models\Seats;
use Carbon\Carbon; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tickets>
 */
class TicketsFactory extends Factory
{
    protected $model = Tickets::class;

    public function definition()
    {
        $randomDate = $this->generateRandomDate();

        return [
            'passenger_id' => Passengers::factory(),
            'seat_id' => Seats::factory(),
            'price' => $this->faker->numberBetween(100, 1000),
            'status' => $this->faker->randomElement(['booked', 'cancelled', 'pending']),
            'booking_date' => $this->faker->dateTimeThisYear(),
            'created_at' => $randomDate, 
            'updated_at' => $randomDate, 
            
        
        
        
        
        ];
    }
    private function generateRandomDate()
    {
        $timeframe = $this->faker->randomElement(['today', 'this_month', 'this_year']);

        switch ($timeframe) {
            case 'today':
                return Carbon::today()->setTime(rand(0, 23), rand(0, 59), rand(0, 59));
            case 'this_month':
                return Carbon::now()->startOfMonth()->addDays(rand(0, Carbon::now()->daysInMonth - 1))->setTime(rand(0, 23), rand(0, 59), rand(0, 59));
            case 'this_year':
                return Carbon::now()->startOfYear()->addDays(rand(0, Carbon::now()->diffInDays(Carbon::now()->startOfYear())))->setTime(rand(0, 23), rand(0, 59), rand(0, 59));
            default:
                return Carbon::now();
        }
    }
}
