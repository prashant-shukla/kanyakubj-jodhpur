@extends('layout.main')
@section('title', 'Achievers')
@push('achievers_active')
    active
@endpush

@php
    // Fetch the selected year from the GET request, default to the latest year
    $selectedYear = request('year', '2024'); // Default to 2024 or latest

    // Fetch achievers based on the selected year
    $achievers = App\Models\Achiever::where('year', $selectedYear)->get();

    // Fetch available years from the achievers table
    $years = App\Models\Achiever::select('year')->distinct()->orderBy('year', 'desc')->get();
@endphp

@section('main-section')
  <!-- hero section start -->
  <section class="hero-section">
    <div class="hero-section-translucent d-flex align-items-center justify-content-center">
      <div class="hero-content text-white">
        <h1>Achievers</h1>
      </div>
    </div>
  </section>
  <!-- hero section end -->
  
  <!-- achievers section start -->
  <section class="team-boxed">
    <div class="container">
      <div class="text-center py-4" data-aos="zoom-in">
        <h4 class="heading playfair-display-heading">Achievers</h4>
        <p class="lead">Every journey has a story, and every story holds a lesson.<br />Discover how our path was shaped by passion, perseverance, and a relentless pursuit of excellence.</p>
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
