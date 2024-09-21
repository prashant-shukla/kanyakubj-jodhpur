<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index(Request $request)
    {
        // Fetch all events
        $events = Event::all();

        // Fetch the latest event
        $latestEvent = $events->first();

        // Determine the event title for the gallery filter
        $eventTitle = $request->input('event', $latestEvent ? $latestEvent->title : 'No Events');

        // Fetch galleries based on the selected event title
        $photos = Gallery::whereHas('event', function ($query) use ($eventTitle) {
            $query->where('title', $eventTitle);
        })->get();

        // Pass the events, latest event, and photos to the view
        return view('gallery', compact('events', 'latestEvent', 'photos', 'eventTitle'));
    }

    
}
