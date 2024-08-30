<?php

namespace Database\Seeders;

use App\Models\Passengers;
use Illuminate\Database\Seeder;
use Database\Factories\PassengersFactory;
class PassengersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        Passengers::factory()->count(10)->create();
    }
}
