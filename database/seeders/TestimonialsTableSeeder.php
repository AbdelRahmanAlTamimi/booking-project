<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Seed the testimonials table.
     *
     * @return void
     */
    public function run()
    {
        
        Testimonial::factory()->count(12)->create();
    }
}
