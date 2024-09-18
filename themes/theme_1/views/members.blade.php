@extends('layout.main')
@section('title', 'Members')
@push('members_active')
    active
@endpush

@php

    // Fetch active tenures for the dropdown
    $tenures = App\Models\Tenure::where('status', '1')->get();
    // Check if 'tenure' is present in the GET request, else use the default value '2020-2024'
    $tenure = $_GET['tenure'] ?? $tenures->first()->title;

    // Fetch the tenure record by the title
    $tenureRecord = App\Models\Tenure::where('title', $tenure)->first();

    // Debugging: Check if the tenure record is being fetched
    // dd($tenureRecord);

    // If tenure record is found, fetch members by tenure_id, otherwise return an empty collection
    if ($tenureRecord) {
        $members = App\Models\CommitteeMember::where('tenure_id', $tenureRecord->id)->get();

        // Debugging: Check if members are being fetched
        // dd($members);
    } else {
        $members = collect(); // Empty collection if no matching tenure is found
    }

@endphp

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
                <form id="timePeriodForm" action="/members" method="GET">
                    <select id="timePeriodFilter" name="tenure" class="form-select form-select-sm w-auto"
                        aria-label="Filter by Time Period" onchange="document.getElementById('timePeriodForm').submit();">
                        @php
                            // Determine the selected tenure from the GET request, default to the first tenure if not set
                            $selectedTenure = $_GET['tenure'] ?? $tenures->first()->title;
                        @endphp

                        @foreach ($tenures as $tenureOption)
                            <option value="{{ $tenureOption->title }}"
                                {{ $tenureOption->title == $selectedTenure ? 'selected' : '' }}>
                                {{ $tenureOption->title }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>


            <div class="row people">
                @foreach ($members as $member)
                    <div class="col-md-6 col-lg-3 item" data-aos="zoom-in">
                        <div class="box border border-1 d-flex flex-column justify-content-between">
                            <img class="img-fluid" src="{{ asset('storage/' . $member->image) }}" alt="Ben Johnson">
                            <div class="text-center">
                                <h3 class="name mb-2">{{ $member->name }}</h3>
                                <p class="title mb-3">{{ $member->position }}</p>
                                <p class="title mb-3">{{ $tenure }}</p>
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
@endsection
