@extends('layout.main')

@section('title',"home")
@push("home_active")
  active
@endpush

@section("main-section")

    <!-- main slider start -->
  <div id="carouselDark" data-aos="zoom-in" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{asset("theme_1/images/main-slide-1.jpg")}}" class="d-block w-100"
          style="height: 600px; object-fit: cover; object-position: center;" alt="...">
        <div class="carousel-caption d-none d-md-block rounded">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{asset("theme_1/images/main-slide-2.jpg")}}" class="d-block w-100"
          style="height: 600px; object-fit: cover; object-position: center;" alt="...">
        <div class="carousel-caption d-none d-md-block rounded">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset("theme_1/images/main-slide-3.jpg")}}" class="d-block w-100"
          style="height: 600px; object-fit: cover; object-position: center;" alt="...">
        <div class="carousel-caption d-none d-md-block rounded">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- main slider end -->

  <!-- sunrise/sunset widget start -->
  <div class="container mt-5" data-aos="zoom-in">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card text-center bg-light border-0 shadow">
          <div class="card-body widget">
            <h5 class="card-title mb-4">Sunrise & Sunset</h5>
            <div class="d-flex justify-content-around align-items-center mb-4">
              <div class="sunrise">
                <i class="fa-solid fa-sun fa-3x text-warning"></i>
                <h6 class="mt-2">Sunrise</h6>
                <p id="sunrise-time" class="mb-0">06:00 AM</p>
              </div>
              <div class="sunset">
                <i class="fa-solid fa-moon fa-3x text-danger"></i>
                <h6 class="mt-2">Sunset</h6>
                <p id="sunset-time" class="mb-0">07:00 PM</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- sunrise/sunset widget end -->

  <!-- About Section start -->
  <section class="my-5 py-4 about">
    <div class="container-fluid px-2 px-lg-5">
      <h4 class="text-center heading playfair-display-heading mb-4">About Us</h4>
      <p class="lead text-center mx-auto">Explore the significant milestones and initiatives that have positively
        impacted our community.</p>
      <div class="row align-items-center">
        <div class="col-md-6" data-aos="fade-right">
          <p class="fs-6 text-center text-md-start">
            Our community is a vibrant and inclusive space where individuals from all walks of life come together to
            share, learn, and grow. We believe in fostering an environment that encourages collaboration, mutual
            respect, and the exchange of ideas. Whether you're a seasoned professional or just starting out, our
            community provides a supportive network that helps everyone reach their full potential. Through various
            events, workshops, and discussions, we aim to inspire creativity, drive innovation, and promote a culture of
            continuous learning and improvement.
          </p>
          <p class="fs-6 text-center text-md-start">
            We are committed to building a community that values diversity and embraces differences. Here, every voice
            is heard, and every perspective is valued. Our members are passionate, driven, and eager to contribute to
            something greater than themselves. We encourage active participation and believe that each person has
            something unique to offer. By working together, we strive to create meaningful connections, foster a sense
            of belonging, and make a positive impact both within our community and in the wider world.
          </p>
        </div>
        <div class="col-md-6" data-aos="zoom-in">
          <div class="image-wrapper">
            <img src="{{asset("theme_1/images/about-home.png")}}" class="img-fluid rounded shadow-sm" alt="About Image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section end -->

  <!-- daily quote section start -->
  <section class="quote-widget mt-5 mb-5">
    <div class="container-fluid px-2 px-lg-5" data-aos="flip-right">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card shadow-sm border-0 text-center bg-light">
            <div class="card-body widget">
              <!-- Added heading with icon -->
              <h4 class="card-title playfair-display-heading mb-4">Quote of the Day</h4>
              <blockquote class="blockquote mb-4">
                <p class="mb-0 text-secondary">"The only limit to our realization of tomorrow is our doubts of today."
                </p>
              </blockquote>
              <footer class="blockquote-footer text-muted">Franklin D. Roosevelt</footer>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- daily quote section end -->

  <!-- our mission section start -->
  <section class="my-5 py-4 about">
    <div class="container px-2 px-lg-5">
      <h4 class="text-center heading playfair-display-heading mb-4">Our Mission</h4>
      <p class="lead text-center mx-auto">Our mission is to create a sustainable and inclusive future by implementing innovative solutions, empowering communities, and preserving our planet for generations to come.</p>
      <div class="row align-items-center mt-5">
        <!-- Image Column -->
        <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-6">
              <div class="row">
                <div class="col-lg-12 col-md-12 mt-4 pt-2" data-aos="zoom-in">
                  <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                    <img src="{{asset("theme_1/images/mission-1.jpg")}}" class="img-fluid" alt="Image" />
                    <div class="img-overlay bg-dark"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
              <div class="row">
                <div class="col-lg-12 col-md-12" data-aos="zoom-in">
                  <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                    <img src="{{asset("theme_1/images/mission-2.jpg")}}" class="img-fluid" alt="Image" />
                    <div class="img-overlay bg-dark"></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 mt-4 pt-2" data-aos="zoom-in">
                  <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                    <img src="{{asset("theme_1/images/mission-3.jpg")}}" class="img-fluid" alt="Image" />
                    <div class="img-overlay bg-dark"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Content Column -->
        <div class="col-md-6">
          <!-- Mission Point 1 -->
          <div class="d-flex align-items-start mb-4" data-aos="fade-right">
            <div class="me-3">
              <img src="{{asset("theme_1/images/enviornment.png")}}" width="40px" alt="Environment Icon" class="icon-img">
            </div>
            <div>
              <h5>Save Environment</h5>
              <p>We are dedicated to implementing eco-friendly practices that reduce waste, conserve energy, and protect biodiversity. By fostering sustainability, we aim to preserve the natural world for future generations.</p>
            </div>
          </div>
          <!-- Mission Point 2 -->
          <div class="d-flex align-items-start mb-4" data-aos="fade-right">
            <div class="me-3">
              <img src="{{asset("theme_1/images/empower.png")}}" width="40px" alt="Community Icon" class="icon-img">
            </div>
            <div>
              <h5>Empower Communities</h5>
              <p>We strive to empower communities by promoting education, providing access to resources, and supporting initiatives that help people thrive and reach their full potential.</p>
            </div>
          </div>
          <!-- Mission Point 3 -->
          <div class="d-flex align-items-start mb-4" data-aos="fade-right">
            <div class="me-3">
              <img src="{{asset("theme_1/images/innovation.png")}}" width="40px" alt="Innovation Icon" class="icon-img">
            </div>
            <div>
              <h5>Foster Innovation</h5>
              <p>Innovation is at the heart of our mission. We encourage creative problem-solving and embrace new technologies to create a brighter, more connected future for all.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- our mission section end -->

  <!-- Testimonials Section Start -->
  <section class="pb-5">
    <div class="container">
      <h4 class="text-center mb-4 heading playfair-display-heading">Testimonials</h4>
      <div class="row d-flex testimonial-slider">
        
        <!-- Testimonial 1 -->
        <div class="col-md-4 ms-2 ms-md-0 me-3 mb-3" data-aos="fade-right">
          <div class="card h-100 text-center">
            <img src="{{asset("theme_1/images/avatar-1.jpg")}}" class="card-img-top rounded-circle mx-auto mt-4" alt="Client Photo" style="width: 100px; height: 100px;">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">John Doe</h5>
              <h6 class="card-subtitle mb-2 text-muted">CEO of Example Co.</h6>
              <p class="card-text flex-grow-1">"Being a part of this community has been a transformative experience. The support and opportunities provided have greatly helped my business grow."</p>
            </div>
          </div>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="col-md-4 me-3 mb-3" data-aos="fade-right">
          <div class="card h-100 text-center">
            <img src="{{asset("theme_1/images/avatar-2.jpg")}}" class="card-img-top rounded-circle mx-auto mt-4" alt="Client Photo" style="width: 100px; height: 100px;">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Jane Smith</h5>
              <h6 class="card-subtitle mb-2 text-muted">Marketing Director at ABC Corp.</h6>
              <p class="card-text flex-grow-1">"The networking opportunities provided have been invaluable. I've connected with like-minded professionals who have helped me advance my career."</p>
            </div>
          </div>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="col-md-4 me-3 mb-3" data-aos="fade-right">
          <div class="card h-100 text-center">
            <img src="{{asset("theme_1/images/avatar-3.jpg")}}" class="card-img-top rounded-circle mx-auto mt-4" alt="Client Photo" style="width: 100px; height: 100px;">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Michael Brown</h5>
              <h6 class="card-subtitle mb-2 text-muted">Founder of XYZ Ltd.</h6>
              <p class="card-text flex-grow-1">"I appreciate the platform for giving a voice to small business owners. The resources and advice have been game changers for my company."</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="col-md-4 me-3 mb-3">
          <div class="card h-100 text-center">
            <img src="{{asset("theme_1/images/avatar-4.jpg")}}" class="card-img-top rounded-circle mx-auto mt-4" alt="Client Photo" style="width: 100px; height: 100px;">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Michael Brown</h5>
              <h6 class="card-subtitle mb-2 text-muted">Founder of XYZ Ltd.</h6>
              <p class="card-text flex-grow-1">"I appreciate the platform for giving a voice to small business owners. The resources and advice have been game changers for my company."</p>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="col-md-4 me-3 mb-3">
          <div class="card h-100 text-center">
            <img src="{{asset("theme_1/images/avatar-5.jpg")}}" class="card-img-top rounded-circle mx-auto mt-4" alt="Client Photo" style="width: 100px; height: 100px;">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">Michael Brown</h5>
              <h6 class="card-subtitle mb-2 text-muted">Founder of XYZ Ltd.</h6>
              <p class="card-text flex-grow-1">"I appreciate the platform for giving a voice to small business owners. The resources and advice have been game changers for my company."</p>
            </div>
          </div>
        </div>
    
      </div>
    </div>
    
  </section>
  
  
  <!-- Testimonials Section End -->
  <!-- Donate Now Section -->
  <section id="donate-now" class="py-5 text-center">
    <div class="container">
      <h4 class="heading playfair-display-heading">Support Our Cause</h2>
        <p class="mb-4">Your contribution helps us continue our mission. Every donation makes a difference.</p>

        <button type="button" class="button button--pan" data-bs-toggle="modal" data-bs-target="#donateModal">
          <span>Donate Now</span>
        </button>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="donateModalLabel">Thank You for Your Support!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="https://placehold.co/300x150/png" class="img-fluid mb-3" alt="Donation Image">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="button_header button--pan" data-bs-dismiss="modal"><span>Close</span></button>
          </div>
        </div>
      </div>
    </div>

  </section>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    $(document).ready(function () {
    $('.testimonial-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      arrows: false,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  });

  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const sunriseElement = document.getElementById('sunrise-time');
      const sunsetElement = document.getElementById('sunset-time');
  
      function updateTimes() {
        fetch('https://api.sunrise-sunset.org/json?lat=36.7201600&lng=-4.4203400&date=today')
          .then(response => response.json())
          .then(data => {
            const sunrise = data.results.sunrise;
            const sunset = data.results.sunset;
            sunriseElement.textContent = sunrise;
            sunsetElement.textContent = sunset;
          })
          .catch(error => console.error('Error fetching data:', error));
      }
  
      updateTimes();
  
    });
  
  </script>
@endsection