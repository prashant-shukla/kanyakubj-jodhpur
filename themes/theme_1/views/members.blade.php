@extends('layout.main')
@section('title', 'Members')
@push('members_active')
    active
@endpush

@section('main-section')
    <!-- hero section start -->
    <section class="hero-section">
        <div class="hero-section-translucent d-flex flex-column align-items-center justify-content-center">
            <div class="img text-center">
                <img src="{{ asset('theme_1/images/0b340f_a659856b4c5c4a6da9c8a9e1620a8ae4~mv2_d_2189_2189_s_2.webp') }}" alt="" class="img-fluid">
            </div>
            <div class="text text-center">
                <h1>कान्यकुब्ज ब्राह्मण समाज (रजि.), जोधपुर (राज.)</h1>
            </div>
        </div>
    </section>
    <!-- hero section end -->
    <!-- members section start -->
    <section class="team-boxed">
        <div class="container">
            <div class="text-center py-4" data-aos="fade-up">
                <h4 class="heading playfair-display-heading">कार्यकारिणी सदस्य</h4>
                <p class="lead">हर यात्रा की एक कहानी होती है और हर कहानी में एक सबक छिपा होता है।<br />जानिए कि कैसे हमारा रास्ता जुनून, दृढ़ता और उत्कृष्टता की निरंतर खोज से आकार लेता है।</p>
            </div>

            <!-- Time Period Filter -->
            <div class="mb-4 d-flex justify-content-end" data-aos="fade-right">
                <form id="timePeriodForm" action="/members" method="GET">
                    <select id="timePeriodFilter" name="tenure" class="form-select form-select-sm w-auto"
                        aria-label="Filter by Time Period" onchange="document.getElementById('timePeriodForm').submit();">
                        @php
                            // Determine the selected tenure from the GET request, default to the first tenure if not set
                            $selectedTenure = $_GET['tenure'] ?? $tenures->first()->title;
                        @endphp

                        @foreach ($tenures as $tenureOption)
                            <option value="{{ $tenureOption->title }}"
                                {{ $tenureOption->title == $selectedTenure ? 'selected' : '' }}>
                                {{ $tenureOption->title }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>


            <div class="row people">
                @foreach ($members as $member)
                    <div class="col-md-6 col-lg-3 item" data-aos="zoom-in">
                        <div class="box border border-1 d-flex flex-column justify-content-between">
                            <!-- Link for each member -->
                            
                                <img class="img-fluid" src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" style="height: 300px">
                                <div class="text-center">
                                    <h3 class="name mb-2">{{ $member->name }}</h3>
                                    <p class="title mb-3">{{ $member->position }}</p>
                                    <p class="title mb-3">{{ $tenure }}</p>
                                    <div class="social">
                                        @php
                                            $socialLinks = json_decode($member->social_media_links, true);
                                        @endphp
            
                                        @if (!empty($socialLinks['facebook']))
                                            <a href="{{ $socialLinks['facebook'] }}" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                        @endif
                                        @if (!empty($socialLinks['x']))
                                            <a href="{{ $socialLinks['x'] }}" target="_blank"><i class="fa-brands fa-x"></i></a>
                                        @endif
                                        @if (!empty($socialLinks['instagram']))
                                            <a href="{{ $socialLinks['instagram'] }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                        @endif
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                @endforeach
            </div>
            

        </div>
    </section>
@endsection
