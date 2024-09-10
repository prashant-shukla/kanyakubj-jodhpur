<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Slide;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the slides from the database
        $slides = Slide::all();
        $quote = Quote::latest()->first();
        $testimonials = Testimonial::all();
        // Pass the slides to the view
        return view('index', compact('slides', 'quote', 'testimonials'));
    }
}
