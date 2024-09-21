@extends('layout.main')
@section('title','contact_us')
@push('contact_active')
    active
@endpush

@section('main-section')
 <!-- hero section start -->
 <section class="hero-section ">
    <div class="hero-section-translucent d-flex align-items-center justify-content-center">
      <div class="hero-content text-white">
        <h1>Contact Us</h1>
      </div>
    </div>
  </section>
  <!-- hero section end -->
  <!-- form section start -->
  <section class="py-3">
    <div class="container">
      <div class="text-center py-4" data-aos="zoom-in">
        <h4 class="heading playfair-display-heading">Contact Us</h4>
        <p class="lead">We value every opportunity to connect with you. <br />Reach out to us through any of the following channels for inquiries, support, or collaboration.</p>
      </div>
      <div class="row gy-3 gy-md-4 gy-lg-0 align-items-md-center">
        <div class="col-12 col-lg-6">
          <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11">
              <h3 class="heading playfair-display-heading mb-3" data-aos="fade-right">Get in Touch</h3>
              <p class="lead fs-6 text-secondary mb-5">We are excited to hear from you! Whether you're interested in working with us or just want to say hello, feel free to reach out through any of the contact methods below.</p>
              <div class="d-flex mb-5" data-aos="zoom-in">
                <div class="me-4 primary-color">
                  <i class="fa-solid fa-location-dot fa-2x"></i>
                </div>
                <div>
                  <h6 class="mb-3">Address</h6>
                  <address class="mb-0 text-secondary">8014 Edith Blvd NE, Albuquerque, New York, United States</address>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-12 col-sm-6">
                  <div class="d-flex mb-5 mb-sm-0" data-aos="zoom-in">
                    <div class="me-4 primary-color">
                      <i class="fa-solid fa-phone fa-2x"></i>
                    </div>
                    <div>
                      <h6 class="mb-3">Phone</h6>
                      <p class="mb-0">
                        <a class="link-secondary text-decoration-none" href="tel:+15057922430">(505) 792-2430</a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6" data-aos="zoom-in">
                  <div class="d-flex mb-0">
                    <div class="me-4 primary-color">
                      <i class="fa-solid fa-envelope fa-2x"></i>
                    </div>
                    <div>
                      <h6 class="mb-3">E-Mail</h6>
                      <p class="mb-0">
                        <a class="link-secondary text-decoration-none" href="mailto:demo@yourdomain.com">demo@yourdomain.com</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="bg-white border rounded shadow-sm overflow-hidden" data-aos="fade-up">
            <form action="#!">
              <div class="row px-4 py-5 g-4">
                <div class="col-12">
                  <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
                </div>
                <div class="col-12 col-md-6">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text primary-color">
                      <i class="fa-solid fa-envelope"></i>
                    </span>
                    <input type="email" class="form-control" id="email" name="email" value="" required>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <label for="phone" class="form-label">Phone Number</label>
                  <div class="input-group">
                    <span class="input-group-text primary-color">
                      <i class="fa-solid fa-phone"></i>
                    </span>
                    <input type="tel" class="form-control" id="phone" name="phone" value="">
                  </div>
                </div>
                <div class="col-12">
                  <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="subject" name="subject" value="" required>
                </div>
                <div class="col-12">
                  <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="button_header button--pan" type="submit"><span>Send Message</span></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>  
  <!-- form section end -->
  <!-- map section start -->
  <section id="map">
    <div class="container py-5">
      <div class="text-center mb-4" data-aos="fade-right">
        <h4 class="heading playfair-display-heading">Find Us Here</h4>
        <p class="lead">Locate our office on the map below and visit us.</p>
      </div>
      <div class="row">
        <div class="col-12" data-aos="zoom-in">
          <!-- Embed Google Map -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.3812605085654!2d-74.00601518459464!3d40.71277577933153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a1c43421721%3A0x62e53bfc600d64d!2sOne%20World%20Trade%20Center%2C%20New%20York%2C%20NY%2010007!5e0!3m2!1sen!2sus!4v1630492298211!5m2!1sen!2sus"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- map section end -->
@endsection