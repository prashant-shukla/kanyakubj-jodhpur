<?php

namespace App\Http\Controllers;

use App\Models\Achiever;
use Illuminate\Http\Request;

class AchieverController extends Controller
{
    //
    public function index(Request $request)
    {
        // Fetch available years from the achievers table
        $years = Achiever::select('year')->distinct()->orderBy('year', 'desc')->get();

        // Set the selected year to the latest year if no year is in the request
        $selectedYear = $request->get('year', $years->first()->year ?? '2024'); // Default to the first year or 2024

        // Fetch achievers based on the selected year
        $achievers = Achiever::where('year', $selectedYear)->get();

        // Pass data to the view
        return view('achievers  ', compact('years', 'achievers', 'selectedYear'));
    }

}
