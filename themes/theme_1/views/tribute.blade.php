@extends('layout.main')
@section('title', 'Achievers')
@push('tribute_active')
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
<section class="hero-section ">
    <div class="hero-section-translucent d-flex align-items-center justify-content-center">
      <div class="hero-content text-white">
        <h1>Tributes</h1>
      </div>
    </div>
  </section>
  <!-- hero section end -->
  <!-- Tribute section start -->
  <section class="team-boxed">
    <div class="container">
      <div class="text-center py-4" data-aos="zoom-in">
        <h4 class="heading playfair-display-heading">Tributes</h4>
        <p class="lead">Every journey has a story, and every story holds a lesson. <br />Discover how our path was shaped by passion, perseverance, and a relentless pursuit of excellence.</p>
      </div>
  
      <!-- Time Period Filter -->
      <div class="mb-4 d-flex justify-content-end" data-aos="fade-right">
        <select id="timePeriodFilter" class="form-select form-select-sm w-auto" aria-label="Filter by Year">
          <option value="2024" selected>2024</option>
          <option value="2023">2023</option>
          <option value="2022">2022</option>
          <option value="2021">2021</option>
          <option value="2020">2020</option>
          <!-- Add more years as needed -->
        </select>
      </div>
  
      <div class="row people">
        <!-- tribute 1 (2024) -->
        <div class="col-12 col-md-6 col-lg-3 item" data-aos="zoom-in" data-bs-toggle="modal" data-bs-target="#tributeModal" data-year="2022">
          <div class="box border border-1 d-flex flex-column justify-content-between">
            <img class="img-fluid" src="images/avatar-1.jpg" alt="Ben Johnson">
            <div class="text-center">
              <h3 class="name mb-2">Ben Johnson</h3>
              <p class="title mb-3">1988-2022</p>
              </div>
          </div>
        </div>
        <!-- tribute 2 (2023) -->
        <div class="col-12 col-md-6 col-lg-3 item" data-aos="zoom-in" data-bs-toggle="modal" data-bs-target="#tributeModal" data-year="2023">
          <div class="box border border-1 d-flex flex-column justify-content-between">
            <img class="img-fluid" src="images/avatar-2.jpg" alt="Emily Clark">
            <div class="text-center">
              <h3 class="name mb-2">Emily Clark</h3>
              <p class="title mb-3">1988-2023</p>
            </div>
          </div>
        </div>
  
        <!-- tribute 3 (2022) -->
        <div class="col-12 col-md-6 col-lg-3 item" data-aos="zoom-in" data-bs-toggle="modal" data-bs-target="#tributeModal" data-year="2024">
          <div class="box border border-1 d-flex flex-column justify-content-between">
            <img class="img-fluid" src="images/avatar-3.jpg" alt="Carl Kent">
            <div class="text-center">
              <h3 class="name mb-2">Carl Kent</h3>
              <p class="title mb-3">1988-2024</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- modal -->
  <div class="modal fade" id="tributeModal" tabindex="-1" aria-labelledby="tributeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tributeModalLabel">Tribute Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex flex-column flex-md-row align-items-center">
          <!-- Placeholder image -->
          <div class="modal-image mb-3 mb-md-0 me-md-4">
            <img class="img-fluid" src="images/avatar-1.jpg" style="width:300px;" alt="Ben Johnson">
          </div>
          <!-- Tribute details -->
          <div class="modal-details">
            <h5 id="tributeName">John Doe</h5>
            <p id="tributeDates" class="text-muted mb-1">1970-2023</p>
            <p id="tributeInfo">John Doe was a visionary in his field. His work and dedication continue to inspire many. He will be remembered for his passion and contributions.</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="button_header button--pan" data-bs-dismiss="modal"><span>Close</span></button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- tribute section end -->

  <!-- submit tribute start -->
  <section id="Tribute_Form">
    <div class="container py-5">
      <div class="text-center mb-4" data-aos="zoom-in">
        <h4 class="heading playfair-display-heading">Submit Tribute</h4>
        <p class="lead">Let's honor those who made an impact on our community.</p>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-md-8 col-lg-6" data-aos="fade-right">
          <form>
            <div class="mb-3">
              <label for="tributeName" class="form-label">Enter Fullname</label>
              <input type="text" class="form-control" id="tributeName" placeholder="Enter the name of the person">
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob">
              </div>
              <div class="col-md-6">
                <label for="dod" class="form-label">Date of Passing</label>
                <input type="date" class="form-control" id="dod">
              </div>
            </div>
            <div class="mb-3">
              <label for="tributeImage" class="form-label">Image</label>
              <input type="file" class="form-control" id="tributeImage" accept="image/*">
            </div>
            <div class="mb-3">
              <label for="tributeDescription" class="form-label">Short Description</label>
              <textarea class="form-control" id="tributeDescription" rows="4" placeholder="Enter a short description"></textarea>
            </div>
            <button type="submit" class="button_header button--pan"><span>Submit Tribute</span></button>
          </form>
        </div>
      </div>
    </div>
  </section>
  
  <!-- submit tribute -->
@endsection
