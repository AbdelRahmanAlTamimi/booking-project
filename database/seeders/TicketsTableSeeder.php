<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tickets;


class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Tickets::factory()->count(30)->create();
    }
}
