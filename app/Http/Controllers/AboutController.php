<?php

namespace App\Http\Controllers;

use App\Models\CommunityImpact;
use App\Models\HistoricalPhoto;
use App\Models\Leader;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $leaders = Leader::all();
        $historical_photos = HistoricalPhoto::all();
        // Fetch all unique years
        $years = CommunityImpact::select('year')->distinct()->orderBy('year', 'desc')->get();

        // Fetch all community impacts
        $impacts = CommunityImpact::orderBy('year', 'desc')->get();
        return view('about',compact('leaders','historical_photos','years','impacts'));
    }
}
