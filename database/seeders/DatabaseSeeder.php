<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Aircraft;
use App\Models\Airport;
use App\Models\Booking;
use App\Models\Flight;
use App\Models\FlightSchedule;
use App\Models\Passenger;
use App\Models\Seat;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  User::factory(10)->create();
        //  Aircraft::factory(10)->create();
         Airport::factory(10)->create();
        //  Booking::factory(10)->create();
        //  Flight::factory(10)->create();
        //  FlightSchedule::factory(10)->create();
         Passenger::factory(10)->create();
         Seat::factory(10)->create();

        
    }
}
