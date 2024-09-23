<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index(){
        $upcomingevents = Event::where('end_date', '>=', date('Y-m-d'))->get();
        $pastevents = Event::where('end_date', '<', date('Y-m-d'))->get();

        return view('events',compact('upcomingevents','pastevents'));
    }
}
