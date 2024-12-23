@extends('layout.main')
@section('title', 'Members-detail')
@push('members_detail_active')
    active
@endpush
@section('main-section')

<section>
    <div class="container">
        <h2>Mamber Detail</h2>
        <div class="row people">
            {{-- @foreach ($member as $member)
            dd() --}}
                <div class="col-md-6 col-lg-3 item" data-aos="zoom-in">
                    <div class="box border border-1 d-flex flex-column justify-content-between">
                        <!-- Link for each member -->
                 
                        <img class="img-fluid" 
                        src="{{ $member->image ? asset('storage/' . $member->image) : asset('images/default.png') }}" 
                        alt="{{ $member->name }}" 
                        style="height: 300px">
                   
                            <div class="text-center">
                                <h3 class="name mb-2">Name : {{ $member->name }}</h3>
                                <p class="title mb-3">Position : {{ $member->position }}</p>
                           
                                <p class="title mb-3">DOB : {{ $member->dob }}</p>
                                <p class="title mb-3"> father_name :{{ $member->father_name }}</p>
                                <p class="title mb-3">residential_address : {{ $member->residential_address }}</p>
                                <p class="title mb-3">mobile : {{ $member->mobile }}</p>
                                <p class="title mb-3">aspad : {{ $member->aspad }}</p>
                                <p class="title mb-3">gotra : {{ $member->gotra }}</p>
                                <p class="title mb-3">blood_group : {{ $member->blood_group }}</p>

                                <div class="other_members">
                                    @php
                                        // Check if $member->other_members is a valid JSON string or already an array
                                        $otherMembers = is_string($member->other_members) ? json_decode($member->other_members, true) : $member->other_members;
                                     
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         

                                    @endphp
                                dd( $otherMembers)
                                    @if (is_array($otherMembers))
                                        @if (!empty($otherMembers['full_name']))
                                            <p class="title mb-3">Name: {{ $otherMembers['full_name'] }}</p>
                                        @endif
                                        @if (!empty($otherMembers['relation']))
                                            <p class="title mb-3">Relation: {{ $otherMembers['relation'] }}</p>
                                        @endif
                                        @if (!empty($otherMembers['education_qualification']))
                                            <p class="title mb-3">Education Qualification: {{ $otherMembers['education_qualification'] }}</p>
                                        @endif
                                        @if (!empty($otherMembers['maritial_status']))
                                            <p class="title mb-3">Marital Status: {{ $otherMembers['maritial_status'] }}</p>
                                        @endif
                                        @if (!empty($otherMembers['dob']))
                                            <p class="title mb-3">Date of Birth: {{ $otherMembers['dob'] }}</p>
                                        @endif
                                        @if (!empty($otherMembers['occupation']))
                                            <p class="title mb-3">Occupation: {{ $otherMembers['occupation'] }}</p>
                                        @endif
                                        @if (!empty($otherMembers['blood_group']))
                                            <p class="title mb-3">Blood Group: {{ $otherMembers['blood_group'] }}</p>
                                        @endif
                                        @if (!empty($otherMembers['other']))
                                            <p class="title mb-3">Other: {{ $otherMembers['other'] }}</p>
                                        @endif
                                    @else
                                        <p class="title mb-3">No additional details available.</p>
                                    @endif
                                </div>
                                
                                
                                
                                <div class="social">
                                    @php
                                        // Check if $member->social_media_links is a valid JSON string
                                        $socialLinks = is_string($member->social_media_links) ? json_decode($member->social_media_links, true) : $member->social_media_links;
                                    @endphp
                                
                                    @if (is_array($socialLinks))
                                        @if (!empty($socialLinks['facebook']))
                                            <a href="{{ $socialLinks['facebook'] }}" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                        @endif
                                        @if (!empty($socialLinks['x']))
                                            <a href="{{ $socialLinks['x'] }}" target="_blank"><i class="fa-brands fa-x"></i></a>
                                        @endif
                                        @if (!empty($socialLinks['instagram']))
                                            <a href="{{ $socialLinks['instagram'] }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                        @endif
                                    @else
                                        <p>No social media links available.</p>
                                    @endif
                                </div>
                                
            {{-- @endforeach --}}
        </div>
        

    </div>
</section>


@endsection