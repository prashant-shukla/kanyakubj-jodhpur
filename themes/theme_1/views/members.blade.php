@extends('layout.main')
@section('title', 'Members')

@section('main-section')
    <section class="team-boxed">
        <div class="container">
            <div class="text-center py-4" data-aos="fade-up">
                <h4 class="heading playfair-display-heading">Committee Members</h4>
                <p class="lead">Discover our dedicated committee members for the selected period.</p>
            </div>

            <!-- Time Period Filter -->
            <div class="mb-4 d-flex justify-content-end" data-aos="fade-right">
                <select id="timePeriodFilter" name="time_period" class="form-select form-select-sm w-auto"
                    aria-label="Filter by Time Period" onchange="redirectToPeriod()">
                    <option value="2020-2024">2020-2024</option>
                    <option value="2016-2020">2016-2020</option>
                    <option value="2012-2016">2012-2016</option>
                    <option value="2008-2012">2008-2012</option>
                    <option value="2004-2008">2004-2008</option>
                </select>
                    <script>
                        function redirectToPeriod() {
                            const selectedPeriod = document.getElementById('timePeriodFilter').value;
                            // Redirect to the URL /members/{selected_time_period}
                            window.location.href = `/members/${selectedPeriod}`;
                        }
                    </script>
            </div>

            <div class="row people">
                <!-- Loop through the committee members -->
                @foreach ($members as $member)
                    <div class="col-md-6 col-lg-3 item" data-aos="zoom-in">
                        <div class="box border border-1 d-flex flex-column justify-content-between">
                            <img class="img-fluid" src="images/avatar-1.jpg" alt="{{ $member->name }}">
                            <div class="text-center">
                                <h3 class="name mb-2">{{ $member->name }}</h3>
                                <p class="title mb-3">{{ $member->position }}</p>
                                <div class="social">
                                    @if ($member->facebook)
                                        <a href="{{ $member->facebook }}"><i class="fa-brands fa-facebook"></i></a>
                                    @endif
                                    @if ($member->x)
                                        <a href="{{ $member->x }}"><i class="fa-brands fa-x"></i></a>
                                    @endif
                                    @if ($member->instagram)
                                        <a href="{{ $member->instagram }}"><i class="fa-brands fa-instagram"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
