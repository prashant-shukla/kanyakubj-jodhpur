@extends('layout.main')
@section('title', 'Gallery')
@push('gallery_active')
    active
@endpush

@php
    // Fetch the selected event title from the GET request, default to 'all'
    $eventTitle = request('event', 'all'); // Use Laravel's request helper

    // Fetch galleries based on the selected event title
    if ($eventTitle === 'all') {
        $photos = App\Models\Gallery::all(); // Fetch all galleries if 'all' is selected
    } else {
        $photos = App\Models\Gallery::whereHas('event', function ($query) use ($eventTitle) {
            $query->where('title', $eventTitle);
        })->get(); // Filter galleries by event title
    }

    // Fetch all events for the filter dropdown
    $events = App\Models\Event::all();
@endphp

@section('main-section')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />

    <!-- hero section start -->
    <section class="hero-section">
        <div class="hero-section-translucent d-flex align-items-center justify-content-center">
            <div class="hero-content text-white">
                <h1>Gallery</h1>
            </div>
        </div>
    </section>
    <!-- hero section end -->
    
    <!-- Unified Filter --> 
    <div class="container my-5">
        <div class="mb-4 d-flex justify-content-end" data-aos="fade-right">
            <form id="eventFilterForm" action="/gallery" method="GET">
                <select id="filter-event" name="event" class="form-select w-auto" aria-label="Filter by Event" onchange="document.getElementById('eventFilterForm').submit();">
                    <option value="all" {{ $eventTitle === 'all' ? 'selected' : '' }}>All Events</option>
                    @foreach ($events as $event)
                        <option value="{{ $event->title }}" {{ $eventTitle === $event->title ? 'selected' : '' }}>
                            {{ $event->title }}
                        </option>
                    @endforeach       
                </select>
            </form>            
        </div>
    </div>

    <!-- Image gallery section start -->
    <div class="container my-5" id="image-gallery">
        <div class="text-center mb-4" data-aos="fade-up">
            <h4 class="heading playfair-display-heading">Photo Album</h4>
            <p class="lead">Every journey has a story, and every story holds a lesson. <br />Discover how our path was
                shaped by passion, perseverance, and a relentless pursuit of excellence.</p>
        </div>
        <div id="photo-album" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($photos as $photo)
                @php
                    $images = $photo->images;
                @endphp
                @foreach ($images as $image)
                    <div class="col overflow-hidden" data-aos="zoom-in">
                        <a href="{{ asset('storage/' . $image) }}" data-lightbox="gallery" data-title="Event Title 1">
                            <img src="{{ asset('storage/' . $image) }}" class="img-fluid gallery-img"/>
                        </a>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
    <!-- Image gallery section end -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
@endsection
