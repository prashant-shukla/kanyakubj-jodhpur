<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\PhotoGallery;
use App\Models\VideoGallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index()
    {
        // Fetch the slides from the database
        $photos = PhotoGallery::all();
        $videos = VideoGallery::all();
        $events = Event::all();
        // Pass the slides to the view
        return view('gallery', compact('photos', 'videos','events'));
    }
}
