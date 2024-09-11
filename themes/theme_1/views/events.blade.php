@extends("layout.main")
@section("title","events")
@push("events_active")
    active
@endpush

@section("main-section")

        <!-- hero section start -->
        <section class="hero-section ">
            <div class="hero-section-translucent d-flex align-items-center justify-content-center">
                <div class="hero-content text-white">
                    <h1>Events</h1>
                </div>
            </div>
        </section>
        <!-- hero section end -->
    
        <!-- events section start -->
        <section class="my-5" id="tabs">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 col-lg-6" data-aos="fade-up">
                        <!-- Section Heading -->
                        <div class="text-center mb-4">
                            <h4 class="heading playfair-display-heading">Events</h4>
                            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt, ipsam!
                                Mollitia consequuntur aliquid illo nam.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-tabs nav-justified custom-nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation" data-aos="zoom-in">
                                <a class="nav-link active" id="justified-tab-0" data-bs-toggle="tab"
                                    href="#justified-tabpanel-0" role="tab" aria-controls="justified-tabpanel-0"
                                    aria-selected="true"><span class="tabnav">Upcoming Events</span></a>
                            </li>
                            <li class="nav-item" role="presentation" data-aos="zoom-in">
                                <a class="nav-link" id="justified-tab-1" data-bs-toggle="tab" href="#justified-tabpanel-1"
                                    role="tab" aria-controls="justified-tabpanel-1" aria-selected="false"><span
                                        class="tabnav">Past Events</span></a>
                            </li>
                        </ul>
                        <div class="tab-content pt-5" id="tab-content">
                            <div class="tab-pane active" id="justified-tabpanel-0" role="tabpanel"
                                aria-labelledby="justified-tab-0">

                                @foreach ($upcomingevents as $event)
                                <div data-aos="zoom-in" class="container border border-1 rounded overflow-hidden my-5 p-0">
                                    <div class="row g-0">
                                        <div class="col-12 col-md-6 p-0">
                                            <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image"
                                                class="img-fluid w-100 h-100">
                                        </div>
                                        <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                                            <div class="p-4">
                                                <div class="mb-5">
                                                    <span class="me-5"><i class="fa-solid fa-calendar-days me-2"></i>Date:
                                                        {{$event->start_date}} - {{$event->end_date}}</span>
                                                    <span><i class="fas fa-map-marker-alt me-2"></i> Venue: {{$event->venue}}</span>
                                                </div>
                                                <h5 class="mb-3 text-primary">{{$event->title}}</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li><i class="far fa-clock me-2"></i> {{$event->start_time}} - {{$event->end_time}}</li>
                                                    <li><i class="fas fa-user me-2"></i> Speaker: {{$event->speaker_chief_guest}}</li>
                                                </ul>
                                                <p class="mb-4">{{$event->description}}</p>
                                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#eventRegistrationModal">Register Now</a>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            <div class="tab-pane" id="justified-tabpanel-1" role="tabpanel"
                                aria-labelledby="justified-tab-1">
                                @foreach ($pastevents as $event)
                                <div data-aos="zoom-in" class="container border border-1 rounded overflow-hidden my-5 p-0">
                                    <div class="row bg-danger-subtle g-0">
                                        <div class="col-12 col-md-6 p-0">
                                            <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image"
                                                class="img-fluid w-100 h-100">
                                        </div>
                                        <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                                            <div class="p-4">
                                                <div class="mb-5">
                                                    <span class="me-5"><i class="fa-solid fa-calendar-days me-2"></i>Date:
                                                        {{$event->start_date}} - {{$event->end_date}}</span>
                                                    <span><i class="fas fa-map-marker-alt me-2"></i> Venue: {{$event->venue}}</span>
                                                </div>
                                                <h5 class="mb-3 text-primary">{{$event->title}}</h5>
                                                <ul class="list-unstyled mb-3">
                                                    <li><i class="far fa-clock me-2"></i> {{$event->start_time}} - {{$event->end_time}}</li>
                                                    <li><i class="fas fa-user me-2"></i> Speaker: {{$event->speaker_chief_guest}}</li>
                                                </ul>
                                                <p class="mb-4">{{$event->description}}</p>
                                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#eventRegistrationModal">Register Now</a>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- events section end -->
    
        <!-- Start Event Registration Form -->
        <!-- Modal -->
        <div class="modal fade" id="eventRegistrationModal" tabindex="-1" aria-labelledby="eventRegistrationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title playfair-display-heading" id="eventRegistrationModalLabel">Event Registration
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <!-- Full Name Field -->
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name"
                                    required>
                            </div>
    
                            <!-- Mobile Field -->
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="tel" class="form-control" id="mobile" placeholder="Enter your mobile number"
                                    required>
                            </div>
    
                            <!-- Comments/Message Field -->
                            <div class="mb-3">
                                <label for="comments" class="form-label">Any comments/message</label>
                                <textarea class="form-control" id="comments" rows="3"
                                    placeholder="Enter any comments or message"></textarea>
                            </div>
    
                            <!-- Are you attending Field -->
                            <div class="mb-3">
                                <label class="form-label">Are you attending?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="attending" id="attendingYes"
                                        value="yes" checked>
                                    <label class="form-check-label" for="attendingYes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="attending" id="attendingNo"
                                        value="no">
                                    <label class="form-check-label" for="attendingNo">
                                        No
                                    </label>
                                </div>
                            </div>
    
                            <!-- Submit Button -->
                            <div class="w-100 d-flex">
                                <button type="submit" class="btn btn-primary w-auto mx-auto">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- End Event Registration Form -->

@endsection