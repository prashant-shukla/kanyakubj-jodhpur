@extends('layout.main')
@section('title', 'Members-detail')
@push('members_detail_active')
    active
@endpush
@section('main-section')

<section>
    <div class="container">
        <h2>Member Detail</h2>
        <div class="row people">
            <div class="col-md-12  item profile" data-aos="zoom-in">
                <div class="box border col-md-12 col-lg-4 m-2 border-1 d-flex flex-column justify-content-between">
                    <!-- Member Image -->
                    
                    <img class="img-fluid"
                        src="{{ $member->avatar ? asset('storage/' . $member->avatar) : asset('avatar/default.png') }}" 
                        alt="{{ $member->name }}" 
                        style="height: 300px;  object-fit: cover;">
                </div>
                    <!-- Member Details -->
                    <div class=" col-md-12 col-lg-7">
                        <div class="card shadow-sm ">
                            <div class="card-header bg-transparent border-0">
                              <h3 class="mb-0">General information</h3>
                            </div>
                            <div class="card-body pt-0">
                                <table class="table table-bordered">
                                  <tr>
                                      <th width="30%">Name</th>
                                      <td width="3%">:</td>
                                      <td>{{ $member->first_name }} {{ $member->last_name }}</td>
                                  </tr>
                                  <tr>
                                      <th width="30%">DOB</th>
                                      <td width="3%">:</td>
                                      <td>{{ $member->dob }}</td>
                                  </tr>
                                  <tr>
                                      <th width="30%">Mobile</th>
                                      <td width="3%">:</td>
                                      <td>{{ $member->mobile }}</td>
                                  </tr>
                                  <tr>
                                      <th width="30%">Residential Address</th>
                                      <td width="3%">:</td>
                                      <td>{{ $member->residential_address }}</td>
                                  </tr>
                                  <tr>
                                      <th width="30%"> Father's Name</th>
                                      <td width="3%">:</td>
                                      <td>{{ $member->father_name }}</td>
                                  </tr>
                                  <tr>
                                      <th width="30%">Gotra</th>
                                      <td width="3%">:</td>
                                      <td>{{ $member->gotra }}</td>
                                  </tr>
                                  <tr>
                                      <th width="30%">Aspad</th>
                                      <td width="3%">:</td>
                                      <td>{{ $member->aspad }}</td>
                                  </tr>
                                  <tr>
                                      <th width="30%">Blood Group</th>
                                      <td width="3%">:</td>
                                      <td>{{ $member->blood_group }}</td>
                                  </tr>
                                </table>
                            </div>

                        </div>
                      
                    
                    
                        @php
                        $otherMembers = is_string($member->other_members) 
                           ? json_encode($member->other_members) 
                           : $member->other_members;
                      @endphp
                
                <div class="other_members">
                    @if (is_array($otherMembers) && count($otherMembers) > 0)
                        @foreach ($otherMembers as $index => $otherMember)
                            @foreach ($otherMember as $key => $value)
                                <p class="title mb-3">
                                    {{ ucwords(str_replace('_', ' ', $key)) }}: 
                                    @if (is_string($value))
                                        {{ $value }}
                                    @elseif (is_array($value))
                                        [Array of Values]
                                    @elseif (is_numeric($value))
                                        {{ $value }}
                                    @else
                                        [Non-String Value]
                                    @endif
                                </p>
                            @endforeach
                        @endforeach
                    @else
                        <p class="title mb-3">No additional details available.</p>
                    @endif
                </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection