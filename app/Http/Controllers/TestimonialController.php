<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function about()
    {
        $allTestimonials = Testimonial::all();

        $totalTestimonials = $allTestimonials->count();
        $half = ceil($totalTestimonials / 2);

        $firstSliderTestimonials = $allTestimonials->slice(0, $half);
        $secondSliderTestimonials = $allTestimonials->slice($half);

        return view('about', [
            'firstSliderTestimonials' => $firstSliderTestimonials,
            'secondSliderTestimonials' => $secondSliderTestimonials
        ]);
    }
}
