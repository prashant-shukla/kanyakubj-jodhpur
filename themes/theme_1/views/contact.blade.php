@extends('layout.main')
@section('title', 'Contact Us')

@push('contact_active')
    active
@endpush

@section('main-section')
    <!-- hero section start -->
    <section class="hero-section">
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
                <p class="lead">We value every opportunity to connect with you. <br />Reach out to us through any of the
                    following channels for inquiries, support, or collaboration.</p>
            </div>
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-md-center">
                <div class="col-12 col-lg-6">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h3 class="heading playfair-display-heading mb-3" data-aos="fade-right">Get in Touch</h3>
                            <p class="lead fs-6 text-secondary mb-5">We are excited to hear from you! Whether you're
                                interested in working with us or just want to say hello, feel free to reach out through any
                                of the contact methods below.</p>
                            <div class="d-flex mb-5" data-aos="zoom-in">
                                <div class="me-4 primary-color">
                                    <i class="fa-solid fa-location-dot fa-2x"></i>
                                </div>
                                <div>
                                    <h6 class="mb-3">Address</h6>
                                    <address class="mb-0 text-secondary">{{ setting('contact.address.street') }}
                                        ,{{ setting('contact.address.city') }} ,{{ setting('contact.address.state') }}
                                        ,{{ setting('contact.address.country') }}</address>
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
                                                <a class="link-secondary text-decoration-none" href="tel:+15057922430">{{setting('contact.phone')}}</a>
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
                                                <a class="link-secondary text-decoration-none"
                                                    href="mailto:demo@yourdomain.com">{{setting('contact.email')}}</a>
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
                        <form action="/contact" method="POST">
                            @csrf
                            <div class="row px-4 py-5 g-4">
                                <div class="col-12">
                                    <label for="fullname" class="form-label">Full Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fullname" name="fullname"
                                        value="{{ old('fullname') }}" required>
                                    @error('fullname')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="email" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text primary-color">
                                            <i class="fa-solid fa-envelope"></i>
                                        </span>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ old('email') }}" required>
                                    </div>
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <div class="input-group">
                                        <span class="input-group-text primary-color">
                                            <i class="fa-solid fa-phone"></i>
                                        </span>
                                        <input type="tel" class="form-control" id="phone" name="phone_number"
                                            value="{{ old('phone_number') }}">
                                    </div>
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Subject <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        value="{{ old('subject') }}" required>
                                    @error('subject')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message" name="message" rows="3" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="button_header button--pan" type="submit">
                                            <span>Send Message</span>
                                        </button>
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
                    
                    <iframe
                        src="{{ setting('contact.google_maps')}}"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- map section end -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function() {
                const submitButton = form.querySelector('button[type="submit"]');
                submitButton.disabled = true;
                submitButton.textContent = 'Sending...'; // Optional, to give feedback to the user
            });
        });
    </script>
@endsection
