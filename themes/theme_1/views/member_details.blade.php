@extends('layout.main')
@section('title', 'Members-details')
@push('members_details_active')
    active
@endpush
@section('main-section')

<section>
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Profile Image</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Gotra</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($members as $member)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <img class="img-fluid" 
                             src="{{ asset('storage/' . $member->avatar) }}" 
                             alt="{{ $member->first_name }}'s Avatar" 
                             style="height: 100px; width: 100px; object-fit: cover;">
                    </td>
                    <td>{{ $member->first_name }}</td>
                    <td>{{ $member->last_name }}</td>
                    <td>{{ $member->mobile }}</td>
                    <td>{{ $member->gotra }}</td>
                    <td>
                        <a href="/members-detail/{{ $member->id }}" class="btn btn-primary">
                            Detail
                        </a>
                    </td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</section>

@endsection