@extends('layout.main')
@section('title', 'Members')
@push('members_active')
    active
@endpush
@section('main-section')
  <!-- hero section start -->
  <section class="hero-section ">
    <div class="hero-section-translucent d-flex align-items-center justify-content-center">
      <div class="hero-content text-white">
        <h1>Members</h1>
      </div>
    </div>
  </section>
  <!-- hero section end -->
  <!-- members section start -->
  <section class="team-boxed">
    <div class="container">
      <div class="text-center py-4" data-aos="fade-up">
        <h4 class="heading playfair-display-heading">Committee Members</h4>
        <p class="lead">Every journey has a story, and every story holds a lesson. <br />Discover how our path was
          shaped by passion, perseverance, and a relentless pursuit of excellence.</p>
      </div>

        <!-- Time Period Filter -->
        <div class="mb-4 d-flex justify-content-end" data-aos="fade-right">
          <select id="timePeriodFilter" class="form-select form-select-sm w-auto" aria-label="Filter by Time Period">
              <option value="2020-2024" selected>2020-2024</option>
              <option value="2016-2020">2016-2020</option>
              <option value="2012-2016">2012-2016</option>
              <option value="2008-2012">2008-2012</option>
              <option value="2004-2008">2004-2008</option>
          </select>
      </div>
      

      <div class="row people">
        @foreach ($members as $member)
            <div class="col-md-6 col-lg-3 item" data-aos="zoom-in" data-start="{{$member->year_start}}" data-end="{{$member->year_end}}" >
                <div class="box border border-1 d-flex flex-column justify-content-between">
                    <img class="img-fluid" src="{{ asset('storage/' . $member->image) }}" alt="Ben Johnson">
                    <div class="text-center">
                        <h3 class="name mb-2">{{ $member->name }}</h3>
                        <p class="title mb-3">{{ $member->position }}</p>
                        <p class="title mb-3">{{$member->year_start}}-{{$member->year_end}}</p>
                        <div class="social">
                          @php
                              $socialLinks = json_decode($member->social_media_links, true);
                          @endphp
                      
                          @if (!empty($socialLinks['facebook']))
                              <a href="{{ $socialLinks['facebook'] }}"><i class="fa-brands fa-facebook"></i></a>
                          @endif
                          @if (!empty($socialLinks['x']))
                              <a href="{{ $socialLinks['x'] }}"><i class="fa-brands fa-x"></i></a>
                          @endif
                          @if (!empty($socialLinks['instagram']))
                              <a href="{{ $socialLinks['instagram'] }}"><i class="fa-brands fa-instagram"></i></a>
                          @endif
                      </div>                      
                    </div>
                </div>
            </div>
        @endforeach
    
    </div>
   
    </div>
</section>
  <!-- members section end -->

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Function to filter members based on selected time period
      function filterMembers() {
          // Get the selected range from the dropdown
          const selectedRange = document.getElementById('timePeriodFilter').value.split('-');
          const startYear = parseInt(selectedRange[0]); // Start year of the range
          const endYear = parseInt(selectedRange[1]); // End year of the range
          
          // Select all member cards
          const memberCards = document.querySelectorAll('.item');
          
          // Loop through each card and determine if it should be shown or hidden
          memberCards.forEach(card => {
              const cardStartYear = parseInt(card.getAttribute('data-start')); // Card's start year
              const cardEndYear = parseInt(card.getAttribute('data-end')); // Card's end year
              
              // Check if the card's years overlap with the selected range
              if (cardEndYear >= startYear && cardStartYear <= endYear) {
                  card.style.display = 'block'; // Show the card
              } else {
                  card.style.display = 'none'; // Hide the card
              }
          });
      }
  
      // Initial filtering when the page loads
      filterMembers();
  
      // Event listener for dropdown change to filter members dynamically
      document.getElementById('timePeriodFilter').addEventListener('change', filterMembers);
  });
  
  </script>
@endsection
