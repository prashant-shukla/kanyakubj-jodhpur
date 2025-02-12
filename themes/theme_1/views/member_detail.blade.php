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
                            alt="{{ $member->name }}" style="height: 300px;  object-fit: cover;">
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
                                        <th width="30%">Occupation</th>
                                        <td width="3%">:</td>
                                        <td>{{ $member->occupation }}</td>
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
                                ? json_decode($member->other_members, true)
                                : $member->other_members;

                            // Function to improve field name formatting (for common cases)
                            function formatFieldName($fieldName)
                            {
                                // Replace underscores with spaces, then capitalize each word.
                                $formatted = ucwords(str_replace('_', ' ', $fieldName));

                                // Optional: Add more custom rules for specific fields
                                $replacements = [
                                    'relation' => 'Relation with Head',
                                    'full_name' => 'Full Name',
                                    'dob' => 'Date of Birth',
                                    'maritial_status' => 'Marital Status',
                                    'education_qualification' => 'Education Qualification',
                                    'blood_group' => 'Blood Group',
                                    'occupation' => 'Occupation',
                                    'other' => 'Other Details',
                                ];

                                // If a replacement exists, use it
                                if (array_key_exists(strtolower($fieldName), $replacements)) {
                                    return $replacements[strtolower($fieldName)];
                                }

                                return $formatted;
                            }

                            // Function to handle null or missing values
                            function formatValue($value)
                            {
                                if ($value === null) {
                                    return 'Not Provided'; // You can change this to whatever makes sense
                                } elseif (is_string($value)) {
                                    return $value;
                                } elseif (is_array($value)) {
                                    return '[Array of Values]'; // Or custom handling for arrays
                                } elseif (is_numeric($value)) {
                                    return $value;
                                } else {
                                    return '[Non-String Value]'; // Handling other types of values
                                }
                            }
                        @endphp

                        <div class="other_members">
                            @if (is_array($otherMembers) && count($otherMembers) > 0)
                                @foreach ($otherMembers as $index => $otherMember)
                                    <!-- Start a new table for each member -->
                                    <table class="table table-bordered m-2">
                                        <thead>

                                        </thead>
                                        <tbody class="">
                                            <tr>
                                                <td rowspan="8">{{ $index + 1 }}</td>
                                                <!-- Display index for each member, spans 7 rows -->
                                                @if (isset($otherMember['relation']))
                                                    <td><strong>{{ formatFieldName('Relation with Head') }}</strong></td>
                                                    <td><strong>{{ formatValue($otherMember['relation']) }}</strong></td>
                                            </tr>
                                @endif
                                @if (isset($otherMember['full_name']))
                                    <tr>
                                        <td>{{ formatFieldName('Full Name') }}</td>
                                        <td>{{ formatValue($otherMember['full_name']) }}</td>
                                    </tr>
                                @endif
                                @if (isset($otherMember['dob']))
                                    <tr>
                                        <td>{{ formatFieldName('DOB') }}</td>
                                        <td>{{ formatValue($otherMember['dob']) }}</td>
                                    </tr>
                                @endif
                                @if (isset($otherMember['maritial_status']))
                                    <tr>
                                        <td>{{ formatFieldName('Marital Status') }}</td>
                                        <td>{{ formatValue($otherMember['maritial_status']) }}</td>
                                    </tr>
                                @endif
                                @if (isset($otherMember['education_qualification']))
                                    <tr>
                                        <td>{{ formatFieldName('Education Qualification') }}</td>
                                        <td>{{ formatValue($otherMember['education_qualification']) }}</td>
                                    </tr>
                                @endif
                                @if (isset($otherMember['occupation']))
                                    <tr>
                                        <td>{{ formatFieldName('Occupation') }}</td>
                                        <td>{{ formatValue($otherMember['occupation']) }}</td>
                                    </tr>
                                @endif
                                @if (isset($otherMember['blood_group']))
                                    <tr>
                                        <td>{{ formatFieldName('Blood Group') }}</td>
                                        <td>{{ formatValue($otherMember['blood_group']) }}</td>
                                    </tr>
                                @endif
                                @if (isset($otherMember['other']))
                                     <tr>
                                        <td>{{ formatFieldName('Other Details') }}</td>
                                        <td>{{ formatValue($otherMember['other']) }}</td>
                                     </tr>
                                @endif
                                </tbody>
                                </table>
                            @endforeach
                            @else
                              <p>No other members found.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



@endsection
