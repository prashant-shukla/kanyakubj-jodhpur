@extends('layout.main')
@section('title', 'Gallery')
@push('gallery_active')
    active
@endpush

@section('main-section')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />

    <!-- hero section start -->
    <section class="hero-section">
        <div class="hero-section-translucent d-flex flex-column align-items-center justify-content-center">
            <div class="img text-center">
                <img src="{{ asset('theme_1/images/0b340f_a659856b4c5c4a6da9c8a9e1620a8ae4~mv2_d_2189_2189_s_2.webp') }}" alt="" class="img-fluid">
            </div>
            <div class="text text-center">
                <h1>श्री कन्याकुब्ज ब्राह्मण समिति जोधपुर</h1>
            </div>
        </div>
    </section>
    <!-- hero section end -->
    
    <!-- Unified Filter --> 
    <div class="container my-5">
        <div class="mb-4 d-flex justify-content-end" data-aos="fade-right">
            <form id="eventFilterForm" action="/gallery" method="GET">
                <select id="filter-event" name="event" class="form-select w-auto" aria-label="Filter by Event" onchange="document.getElementById('eventFilterForm').submit();">
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
            <h4 class="heading playfair-display-heading">फोटो एलबम</h4>
            <p class="lead">हर यात्रा की एक कहानी होती है और हर कहानी में एक सबक छिपा होता है। <br />जानिए कि कैसे हमारा रास्ता जुनून, दृढ़ता और उत्कृष्टता की निरंतर खोज से आकार लेता है।



            </p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
@endsection
