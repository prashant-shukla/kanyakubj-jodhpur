@extends('layout.main')
@section('title', 'members')
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
                <form action="" method="get">
                    <select id="timePeriodFilter" class="form-select form-select-sm w-auto"
                        aria-label="Filter by Time Period">
                        <option value="2020-2024" selected>2020-2024</option>
                        <option value="2016-2020">2016-2020</option>
                        <option value="2012-2016">2012-2016</option>
                        <option value="2008-2012">2008-2012</option>
                        <option value="2004-2008">2004-2008</option>
                    </select>
                </form>
            </div>


            <div class="row people">
                <!-- Member 1 (2021) -->
                <div class="col-md-6 col-lg-3 item" data-aos="zoom-in" data-start="2020" data-end="2023">
                    <div class="box border border-1 d-flex flex-column justify-content-between">
                        <img class="img-fluid" src="images/avatar-1.jpg" alt="Ben Johnson">
                        <div class="text-center">
                            <h3 class="name mb-2">Ben Johnson</h3>
                            <p class="title mb-3">Musician</p>
                            <div class="social">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-x"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 2 (2019) -->
                <div class="col-md-6 col-lg-3 item" data-aos="zoom-in" data-start="2008" data-end="2012">
                    <div class="box border border-1 d-flex flex-column justify-content-between">
                        <img class="img-fluid" src="images/avatar-2.jpg" alt="Emily Clark">
                        <div class="text-center">
                            <h3 class="name mb-2">Emily Clark</h3>
                            <p class="title mb-3">Artist</p>
                            <div class="social">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-x"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 3 (2013) -->
                <div class="col-md-6 col-lg-3 item" data-aos="zoom-in" data-start="2016" data-end="2019">
                    <div class="box border border-1 d-flex flex-column justify-content-between">
                        <img class="img-fluid" src="images/avatar-3.jpg" alt="Carl Kent">
                        <div class="text-center">
                            <h3 class="name mb-2">Carl Kent</h3>
                            <p class="title mb-3">Stylist</p>
                            <div class="social">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-x"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add more members with different ranges... -->
            </div>

        </div>
    </section>
    <!-- members section end -->
@endsection
