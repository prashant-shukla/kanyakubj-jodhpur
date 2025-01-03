@extends('layout.main')
@section('title', 'downlode')

@push('downloads_active')
    active
@endpush

@section('main-section')

<div class="download ">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
            @foreach ($DocumentCategorys as $DocumentCategory)
                <div class="col">
                 <a href="/download/{{$DocumentCategory->slug}}">
                    <div class="card shadow-sm">
                        <!-- Card Image -->
                        
                        <img 
                            src="{{ $DocumentCategory->thumb ? asset('storage/' . $DocumentCategory->thumb) : 'https://via.placeholder.com/150' }}" 
                            class="card-img-top" 
                            alt="Thumbnail"
                            style="height: 250px; object-fit: cover;">
        
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $DocumentCategory->name }}</h5>
                        </div>
                    </div>
                 </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
