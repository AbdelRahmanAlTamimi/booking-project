<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            PassengersTableSeeder::class,
            PlaneTypesTableSeeder::class,
            PlanesTableSeeder::class,
            FlightsTableSeeder::class,
            SeatsTableSeeder::class,
            TicketsTableSeeder::class,
            TestimonialsTableSeeder::class,
        ]);
    }
}
