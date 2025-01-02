@extends('layout.main')
@section('title', 'Achievers')
@push('achievers_active')
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
  
  <!-- achievers section start -->
  <section class="team-boxed">
    <div class="container">
      <div class="text-center py-4" data-aos="zoom-in">
        <h4 class="heading playfair-display-heading">हमें इनपे गर्व है</h4>
        {{-- <p class="lead">हर यात्रा की एक कहानी होती है और हर कहानी में एक सबक छिपा होता है।</br>
          जानिए कि कैसे हमारा रास्ता जुनून, दृढ़ता और उत्कृष्टता की निरंतर खोज से आकार लेता है। </p> --}}
      </div>
  
      <!-- Time Period Filter -->
      <div class="mb-4 d-flex justify-content-end" data-aos="fade-right">
        <form id="yearFilterForm" action="/achievers" method="GET">
            <select id="timePeriodFilter" name="year" class="form-select form-select-sm w-auto" aria-label="Filter by Year" onchange="document.getElementById('yearFilterForm').submit();">
                @foreach ($years as $year)
                    <option value="{{ $year->year }}" {{ $selectedYear == $year->year ? 'selected' : '' }}>
                        {{ $year->year }}
                    </option>
                @endforeach
            </select>
        </form>
      </div>
  
      <div class="row people">
        @foreach ($achievers as $achiever)
          <div class="col-md-6 col-lg-3 item" data-aos="fade-up" data-year="{{ $achiever->year }}">
            <div class="box border border-1 d-flex flex-column justify-content-between">
              <img class="img-fluid" src="{{ asset('storage/' . $achiever->image) }}" alt="{{ $achiever->name }}">
              <div class="text-center">
                <h3 class="name mb-2">{{ $achiever->name }}</h3>
                <p class="title mb-3">{{ $achiever->year }}</p>
                <p>{{ $achiever->description }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- achievers section end -->
@endsection
