<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function about()
    {
        // Fetch all testimonials including related user data
        $allTestimonials = Testimonial::with('user')->get();

        // Split the testimonials into two collections
        $totalTestimonials = $allTestimonials->count();
        $half = ceil($totalTestimonials / 2);

        $firstSliderTestimonials = $allTestimonials->slice(0, $half);
        $secondSliderTestimonials = $allTestimonials->slice($half);

        // Pass the testimonials to the view
        return view('about', [
            'firstSliderTestimonials' => $firstSliderTestimonials,
            'secondSliderTestimonials' => $secondSliderTestimonials
        ]);
    }
}