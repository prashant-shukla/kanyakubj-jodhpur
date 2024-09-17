@extends('layout.main')
@section('title', 'Gallery')
@push('gallery_active')
    active
@endpush
@section('main-section')
    <!-- hero section start -->
    <section class="hero-section ">
        <div class="hero-section-translucent d-flex align-items-center justify-content-center">
            <div class="hero-content text-white">
                <h1>Gallery</h1>
            </div>
        </div>
    </section>
    <!-- hero section end -->
    <!-- Unified Filter --> 
    
    <div class="container my-5 ">
        <div class="mb-4 d-flex justify-content-end" data-aos="fade-right">
            <select id="filter-event" class="form-select w-auto">
                <option value="all">All Events</option>
                @foreach ($events as $event)
                <option value="{{$event->id}}">{{$event->title}}</option>
                @endforeach       
            </select>
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
                <div class="col overflow-hidden" data-aos="zoom-in" data-eventTitle="{{ $photo->event_id }}">
                    <a href="{{ asset('storage/' . $photo->image) }}" data-lightbox="gallery" data-title="Event Title 1">
                        <img src="{{ asset('storage/' . $photo->image) }}" class="img-fluid gallery-img"/>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Image gallery section end -->

    <!-- Video gallery section start -->
    <section class="bg-light">
        <div class="container py-5" id="video-gallery">
            <div class="text-center mb-4" data-aos="fade-right">
                <h4 class="heading playfair-display-heading">Video Gallery</h4>
                <p class="lead">Every journey has a story, and every story holds a lesson. <br />Discover how our path
                    was
                    shaped by passion, perseverance, and a relentless pursuit of excellence.</p>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($videos as $video)
                    <div class="col" data-aos="zoom-in" data-eventTitle="{{ $video->event_id }}">
                        <div class="ratio ratio-16x9">
                            <iframe src="{{ $video->video_link }}" title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Video gallery section end -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script>
        document.getElementById('filter-event').addEventListener('change', function() {
            var event = this.value;
            var albums = document.querySelectorAll('.row .col');
            albums.forEach(function(album) {
                if (event === 'all' || album.getAttribute('data-eventTitle') === event) {
                    album.style.display = 'block';
                } else {
                    album.style.display = 'none';
                }
            });
        });
    </script>
@endsection
