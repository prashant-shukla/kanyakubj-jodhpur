@extends('layout.main')
@section('title', 'Tributes')
@push('tribute_active')
    active
@endpush

@php
    $years = App\Models\Tribute::selectRaw('YEAR(d_o_d) as year')->distinct()->orderBy('year', 'desc')->get();
    $selectedYear = request('year', $years->first()->year ?? date('Y'));
    $tributes = App\Models\Tribute::whereYear('d_o_d', $selectedYear)->get();
@endphp

@section('main-section')
<!-- Hero section start -->
<section class="hero-section">
    <div class="hero-section-translucent d-flex flex-column align-items-center justify-content-center">
        <div class="img text-center">
            <img src="{{ asset('theme_1/images/0b340f_a659856b4c5c4a6da9c8a9e1620a8ae4~mv2_d_2189_2189_s_2.webp') }}" alt="" class="img-fluid">
        </div>
        <div class="text text-center">
            <h1>कान्यकुब्ज ब्राह्मण समाज (रजि.), जोधपुर (राज.)</h1>
        </div>
    </div>
</section>
<!-- Hero section end -->

<!-- Tribute section start -->
<section class="team-boxed">
    <div class="container">
        <div class="text-center py-4" data-aos="zoom-in">
            <h4 class="heading playfair-display-heading">श्रद्धांजलि</h4>
            <p class="lead">हर यात्रा की एक कहानी होती है और हर कहानी में एक सबक छिपा होता है।</br>
                जानिए कि कैसे हमारे रास्ते को जुनून, दृढ़ता और उत्कृष्टता की निरंतर खोज ने आकार दिया।</p>
        </div>

        <!-- Time Period Filter -->
        <div class="mb-4 d-flex justify-content-end" data-aos="fade-right">
            <form id="yearFilterForm" action="{{ url()->current() }}" method="GET">
                <select id="timePeriodFilter" name="year" class="form-select form-select-sm w-auto" aria-label="Filter by Year" onchange="document.getElementById('yearFilterForm').submit();">
                    @foreach ($years as $year)
                        <option value="{{ $year->year }}" {{ $selectedYear == $year->year ? 'selected' : '' }}>
                            {{ $year->year }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>

        <div class="row people">
            @foreach ($tributes as $tribute)
                <div class="col-12 col-md-6 col-lg-3 item" data-aos="zoom-in" data-bs-toggle="modal" data-bs-target="#tributeModal" data-tribute="{{ $tribute->id }}">
                    <div class="box border border-1 d-flex flex-column justify-content-between">
                        <img class="img-fluid" src="{{ asset('storage/' . $tribute->image) }}" alt="{{ $tribute->name }}">
                        <div class="text-center">
                            <h3 class="name mb-2">{{ $tribute->name }}</h3>
                            <p class="title mb-3">{{ date('Y', strtotime($tribute->d_o_b)) }} - {{ date('Y', strtotime($tribute->d_o_d)) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Modal for Tribute Details -->
<div class="modal fade" id="tributeModal" tabindex="-1" aria-labelledby="tributeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tributeModalLabel">Tribute Details</h5>
                <span class="{{setting('theme.button_styles')}}"><button type="button" class="button btn-close" data-bs-dismiss="modal" aria-label="Close"></button></span>
            </div>
            <div class="modal-body d-flex flex-column flex-md-row align-items-center">
                <div class="modal-image mb-3 mb-md-0 me-md-4">
                    <img class="img-fluid" id="tributeImage" src="" style="width:300px;" alt="Tribute Image">
                </div>
                <div class="modal-details">
                    <h5 id="tributeName">Name Placeholder</h5>
                    <p id="tributeDates" class="text-muted mb-1">Year Placeholder</p>
                    <p id="tributeInfo">Description Placeholder</p>
                </div>
            </div>
            <div class="modal-footer">
                <span class="{{setting('theme.button_styles')}}"><button type="button" class="button button_header button--pan" data-bs-dismiss="modal"><span>Close</span></button></span>
            </div>
        </div>
    </div>
</div>

<!-- Tribute section end -->

<!-- submit tribute start -->
<section id="Tribute_Form">
    <div class="container py-5">
        <div class="text-center mb-4" data-aos="zoom-in">
            <h4 class="heading playfair-display-heading">श्रद्धांजलि प्रस्तुत करें</h4>
            <p class="lead">आइये हम उन लोगों का सम्मान करें जिन्होंने हमारे समुदाय पर प्रभाव डाला है।</p>
        </div>

        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tribute submission form -->
        <div class="row justify-content-center mt-3">
            <div class="col-md-8 col-lg-6" data-aos="fade-right">
                <form action="\tribute" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="tributeName" class="form-label">पूरा नाम दर्ज करें</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="tributeName" name="name" value="{{ old('name') }}" placeholder="Enter the name of the person" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Date of Birth and Date of Passing -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="dob" class="form-label">जन्म तिथि</label>
                            <input type="date" class="form-control @error('d_o_b') is-invalid @enderror" id="dob" name="d_o_b" value="{{ old('d_o_b') }}" required>
                            @error('d_o_b')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="dod" class="form-label">पारित होने की तिथि</label>
                            <input type="date" class="form-control @error('d_o_d') is-invalid @enderror" id="dod" name="d_o_d" value="{{ old('d_o_d') }}" required>
                            @error('d_o_d')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-3">
                        <label for="tributeImage" class="form-label">छवि</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="tributeImage" name="image" accept="image/*" required>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Short Description -->
                    <div class="mb-3">
                        <label for="tributeDescription" class="form-label">संक्षिप्त वर्णन</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="tributeDescription" name="description" rows="4" placeholder="Enter a short description" required  >{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit button -->
                    <span class="{{setting('theme.button_styles')}}"><button type="submit" class="button button_header button--pan"><span>श्रद्धांजलि प्रस्तुत करें</span></button></span>
                </form>      
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tributes = @json($tributes);
  
        document.querySelectorAll('.item[data-bs-toggle="modal"]').forEach(item => {
            item.addEventListener('click', function () {
                const tributeId = this.dataset.tribute;
                const tribute = tributes.find(t => t.id == tributeId);
  
                if (tribute) {
                    const d_o_d = new Date(tribute.d_o_d);
                    const formattedDod = d_o_d.toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' }); // Format as "18 Dec 2024"
  
                    document.getElementById('tributeName').innerText = tribute.name;
                    document.getElementById('tributeDates').innerText = `Date of Death: ${formattedDod}`; // Fix this line
                    document.getElementById('tributeInfo').innerText = tribute.description;
                    document.getElementById('tributeImage').src = `{{ asset('storage') }}/${tribute.image}`;
                }
            });
        });
    });
</script>

  
@endsection
