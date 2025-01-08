@extends('layout.main')
@section('title', 'document')

@push('document_active')
    active
@endpush
@section('main-section')
<div class="download">
    <div class="container">
        <h3 class="text-center mb-3">{{ $dom->name }}</h3>
        
        <!-- Single table to display all documents -->
        @if($documents && $documents->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Item Name</th>
                    <th scope="col">Last Updated</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documents as $document)
                    <tr>
                        <td>
                            <!-- Document icon -->
                            <img src="{{ asset('storage/slide_images/pdf-svgrepo-com.svg') }}" width="40px" 
                                 alt="PDF document icon"    class="icon-img">
                            
                            <!-- Download link -->
                            <a href="{{ asset('storage/' . $document->file_path) }}" 
                                download
                               target="_blank" 
                               style="text-decoration:none; color:rgb(6, 6, 6);">
                               {{ $document->title }}
                            </a>
                        </td>
                        <td>
                            <!-- Last updated date -->
                            {{ $document->updated_at->format('F j, Y') }}
                        </td>  
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else 
        <h6 class="text-center text-danger fs-2">No documents found in this category.</h6>
        @endif
            
        
    </div>
</div>
@endsection




