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
        if(setting('maintenance.mode')=="enabled") {
            return view('maintenance');
        }
        // Fetch the slides from the database
        $slides = Slide::all();
        $quote = (Quote::count()) ? Quote::latest()->first() : ['quote'=>'', 'author'=>''];
        $testimonials = Testimonial::all();
        // Pass the slides to the view
        return view('index', compact('slides', 'quote', 'testimonials'));
    }


    public function changeLanguage($Language = 'EN'):string{
        dd($Language);
    }
}
