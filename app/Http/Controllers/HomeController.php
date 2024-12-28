<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Slide;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    public function index()
    {
        // dd(Hash::make('123'));
        if(setting('maintenance.mode')=="enabled") {
            return view('maintenance');
        }
        // dd(Quote::inRandomOrder()->first()->toArray());
        $quote = (Quote::count()) ? $quote = Quote::inRandomOrder()->first() : ['quote'=>'', 'author'=>''];
        $testimonials = Testimonial::all();
        // Pass the slides to the view
        return view('index', compact('quote', 'testimonials'));
    }


    public function changeLanguage($Language = 'EN'):string{
        dd($Language);
    }
}
