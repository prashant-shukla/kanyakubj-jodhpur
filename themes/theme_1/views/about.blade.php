@extends("layout.main")
@section("title","about")
@push("about_active")
  active
@endpush

@section("main-section")

    <!-- hero section start -->
  <section class="hero-section ">
    <div class="hero-section-translucent d-flex align-items-center justify-content-center">
      <div class="hero-content text-white">
        <h1>About Us</h1>
      </div>
    </div>
  </section>
  <!-- hero section end -->

  <!-- Our Story Section Start -->
  <section>
    <div class="container-fluid py-5">
      <div class="text-center mb-4">
        <h4 class="heading playfair-display-heading">Our Story</h4>
        <p class="lead">Every journey has a story, and every story holds a lesson. <br />Discover how our path was
          shaped by passion, perseverance, and a relentless pursuit of excellence.</p>
      </div>
      <div class="row justify-content-center align-items-center">
        <!-- Left Side: Text Content -->
        <div class="col-md-5 mb-4">
          <aside>
            <h5 class="mb-3" data-aos="fade-right">From Roots to Blossoms: The Birth of Our Community</h5>
            <p data-aos="fade-right">Our story begins with a shared dream among a handful of families who wanted to
              create a space where everyone could celebrate their cultural roots while embracing modern life in India.
              We started as a small group meeting in living rooms, sharing stories, and reliving memories of festivals
              back home. What began as informal gatherings quickly blossomed into something more significant. We
              realized the power of unity and the strength of a community that supports one another through life's joys
              and challenges. Over time, we have grown into a thriving community, committed to preserving our traditions
              and fostering a sense of belonging for all members.</p>

            <h5 class="mb-3 mt-4" data-aos="fade-right">Building Bridges: Uniting Generations</h5>
            <p data-aos="fade-right">In today’s fast-paced world, it's easy for generational gaps to widen, but our
              community was built on the belief that understanding between generations is vital. From the outset, we
              aimed to create a space where elders could pass down their wisdom and youth could share fresh
              perspectives. Our events and programs are crafted to bring together young and old, bridging the gap with
              shared stories, cultural practices, and collective learning. Whether it's through cooking classes,
              storytelling sessions, or tech tutorials taught by the younger members, we are proud to have created a
              community where every generation learns from the other, enriching our collective experience.</p>

            <h5 class="mb-3 mt-4" data-aos="fade-right">Empowering Change: A Community for All</h5>
            <p data-aos="fade-right">Our community stands on the foundation of inclusivity and empowerment. From the
              very beginning, we recognized the importance of giving everyone a voice, regardless of background,
              experience, or age. We believe that a truly vibrant community is one that embraces diversity and
              encourages all its members to contribute. Our journey has been one of continuous learning and growth,
              driven by a commitment to uplift those around us. Through educational workshops, charity drives, and
              outreach programs, we have worked tirelessly to ensure that our community is a place where everyone feels
              welcome, valued, and empowered to make a difference.</p>
          </aside>
        </div>

        <!-- Right Side: Image Content -->
        <div class="col-md-5 mb-4">
          <aside class="container">
            <!-- Full-width Image -->
            <div class="row mb-3">
              <div class="col-12">
                <img src="{{asset("theme_1/images/story-1.jpg")}}" class="img-fluid w-100 mb-3 " data-aos="zoom-in"
                  alt="Story Image 1">
              </div>
            </div>
            <!-- Two Half-width Images -->
            <div class="row">
              <div class="col-12 col-md-6">
                <img src="{{asset("theme_1/images/story-2.jpg")}}" class="img-fluid w-100 mb-3" data-aos="zoom-in"
                  alt="Story Image 2">
              </div>
              <div class="col-12 col-md-6">
                <img src="{{asset("theme_1/images/story-3.jpg")}}" class="img-fluid w-100 mb-3" data-aos="zoom-in"
                  alt="Story Image 3">
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- our story section end -->

  <!-- Mission Statement Section Start -->
  <section id="missionSectionAbout">
    <div class="container py-5">
      <div class="text-center mb-4">
        <h4 class="heading playfair-display-heading">Our Mission</h4>
        <p class="lead">Our mission is to unite and empower our community through shared culture, collaboration, and positive impact.</p>
      </div>
      <div class="row justify-content-center mt-3">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4" data-aos="fade-right">
          <div class="card h-100 border-0 bg-transparent text-center mx-auto position-relative card-container card-mission">
            <!-- Circular div with border and icon in the center -->
            <div class="circular-icon mx-auto mb-3">
              <i class="fas fa-bullseye icon"></i> <!-- Example icon, change to your preferred icon -->
            </div>
            <!-- Leading line from circle -->
            <div class="line"></div>
            <!-- Large dot at the end of the line -->
            <div class="dot"></div>
            <div class="card-body mt-4">
              <h5 class="card-title">Mission</h5>
              <p class="card-text">Our mission is to unite and empower our community through shared culture, collaboration, and positive impact.</p>
            </div>
          </div>
        </div>
              
        <!-- Card 2 -->
        <div class="col-md-4 mb-4" data-aos="fade-right">
          <div class="card h-100 border-0 bg-transparent text-center mx-auto position-relative card-container card-vision">
            <!-- Circular div with border and icon in the center -->
            <div class="circular-icon mx-auto mb-3">
              <i class="fas fa-eye icon"></i> <!-- Example icon, change to your preferred icon -->
            </div>
            <!-- Leading line from circle -->
            <div class="line"></div>
            <!-- Large dot at the end of the line -->
            <div class="dot"></div>
            <div class="card-body mt-4">
              <h5 class="card-title">Vision</h5>
              <p class="card-text">Our vision is to create a vibrant community where every member is valued and has the opportunity to thrive, fostering innovation and growth.</p>
            </div>
          </div>
        </div>
        
        <!-- Card 3 -->
        <div class="col-md-4 mb-4" data-aos="fade-right">
          <div class="card h-100 border-0 bg-transparent text-center mx-auto position-relative card-container card-values">
            <!-- Circular div with border and icon in the center -->
            <div class="circular-icon mx-auto mb-3">
              <i class="fas fa-handshake icon"></i> <!-- Example icon, change to your preferred icon -->
            </div>
            <!-- Leading line from circle -->
            <div class="line"></div>
            <!-- Large dot at the end of the line -->
            <div class="dot"></div>
            <div class="card-body mt-4">
              <h5 class="card-title">Core Values</h5>
              <p class="card-text">We are committed to inclusivity, respect, and mutual support. Our core values guide our interactions and decisions, ensuring a positive and supportive community environment.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission Statement Section End -->

  <!-- Leadership History Section -->
  <section class="leadership-section">
    <div class="container">
      <h4 class="text-center mb-4 heading playfair-display-heading">Leadership History</h4>
      <div class="row">
        @foreach ($leaders as $leader)
        <div class="col-md-4 mb-4" data-aos="fade-right">
          <div class="card d-flex flex-column h-100">
            <img src="{{ asset('storage/' . $leader->image) }}" class="card-img-top" alt="female Leader Photo">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{$leader->name}}</h5>
              <p class="text-muted">{{$leader->years_served}}</p> <!-- Time period below the card title -->
              <p class="card-text flex-grow-1">{{$leader->description}}</p>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </section>



  <!-- leadership section end -->

  <!-- community impact section start -->

  <section class="timeline_area py-3 my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading -->
                <div class="text-center mb-4">
                    <h4 class="heading playfair-display-heading">Community Impact</h4>
                    <p class="lead">Explore the significant milestones and initiatives that have positively impacted our community.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Timeline Area -->
                <div class="apland-timeline-area">
                    @foreach ($years as $year)
                        <!-- Single Timeline Content -->
                        <div class="single-timeline-area" data-aos="fade-up">
                            <div class="timeline-date">
                                <p>{{ $year->year }}</p>
                            </div>
                            <div class="row">
                                @foreach ($impacts->where('year', $year->year) as $impact)
                                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                                        <div class="single-timeline-content row g-0 bg-white" data-aos="fade-right">
                                            <div class="timeline-image col-4 p-0">
                                                <img src="{{ asset('storage/' .$impact->image) }}" alt="{{ $impact->title }}" class="img-fluid w-100 h-100" style="object-fit: cover;">
                                            </div>
                                            <div class="timeline-text col-8 p-3">
                                                <h6>{{ $impact->title }}</h6>
                                                <p>{{ $impact->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>



  <!-- community impact section end -->

  <!-- photo collage  start-->
  <section class="photo-collage mb-5">
    <div class="container">
        <div class="text-center mb-4">
            <h4 class="heading playfair-display-heading">Historical Photo Collage</h4>
            <p class="lead">A collage of historical photos showcasing important events and milestones.</p>
        </div>
        <div class="row g-3">
            @foreach ( $historical_photos as $historical_photo )
            <div class="col-12 col-md-4" data-aos="zoom-in">
              <div class="position-relative overflow-hidden image-container">
                  <img src="{{ asset('storage/' . $historical_photo->image) }}" alt="Historical Event 1" class="img-fluid rounded-3 zoom-image">
              </div>
          </div>
            @endforeach
        </div>
    </div>
</section>


  <!-- Modal for displaying images -->
  <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body p-0">
          <img src="" alt="" class="img-fluid" id="modalImage">
        </div>
      </div>
    </div>
  </div>

  <!-- photo collage end -->

  <script>
    document.querySelectorAll('.zoom-image').forEach(img => {
    img.addEventListener('click', function () {
      const modalImage = document.getElementById('modalImage');
      modalImage.src = this.src;
    });
  });

  // Close the modal when clicking outside the image
  document.getElementById('imageModal').addEventListener('click', function (event) {
    if (!event.target.closest('.modal-content')) {
      const modal = bootstrap.Modal.getInstance(this);
      modal.hide();
    }
  });
  </script>

@endsection