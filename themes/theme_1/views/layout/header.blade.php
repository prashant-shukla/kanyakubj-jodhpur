<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Kanyakubj')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme_1/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="{{ asset('storage/' . setting('community.favicon')) }}" type="image/icon type">

    <style>
        :root {
            --primaryColor: {{ setting('theme.primary_color') }};
            --primaryTransparent: {{ setting('theme.primary_color') . '4f' }};
            --secondaryColor: {{ setting('theme.secondary_color') }};
        }

        .VIpgJd-ZVi9od-ORHb-OEVmcd {
            display: none;
        }

        body {
            top: 0px !important;
        }
    </style>

</head>

<body class="roboto-body-text">
    <!-- header section start -->
    <header class="bg-body-tertiary {{ setting('theme.layout_options') }}" id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-2 px-lg-5 shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand fw-bolder playfair-display-heading" href="/">
                    <img src="{{ asset('storage/' . setting('community.logo')) }}" alt="Community Logo" style="height: auto; width: 100px;">
                </a>                              
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link @stack('home_active')" aria-current="page" href="/">घर</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @stack('about_active')" href="about">के बारे में</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @stack('events_active')" href="events">कार्यक्रम</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @stack('members_active')" href="members">कार्यकारिणी सदस्य</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @stack('downloads_active')" href="download">डाउनलोड</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @stack('gallery_active')" href="gallery">गैलरी</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @stack('achievers_active')" href="achievers">गौरव पल</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @stack('tribute_active')" href="tribute">श्रद्धांजलि</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @stack('contact_active')" href="contact">हमसे संपर्क करें</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center flex-column flex-md-row">
                        <div class="d-flex">
                            <span class="{{setting('theme.button_styles')}}"><button type="button" class="button button--pan" data-bs-toggle="modal" data-bs-target="#donateModal">
                                <span>दान करें</span>
                            </button></span>
                            <a href="/register" class="{{setting('theme.button_styles')}}"><button
                                    class="button button_header button--pan"><span>रजिस्टर</span></button></a>
                        </div>
                        @if (setting('localization.multi_language'))
                            <div id="google_translate_element" class="ms-2 mt-2 mt-md-0"></div>

                            <style>
                                .goog-logo-link {
                                    display: none !important;
                                }

                                .goog-te-gadget {
                                    font-size: 0px !important;
                                }

                                .goog-te-banner-frame.skiptranslate,
                                .goog-te-gadget-icon {
                                    display: none !important;
                                }

                                div#google_translate_element div.goog-te-gadget-simple {
                                    border: 1px solid #ced4da;
                                    border-radius: 1.375rem;
                                    padding: 0.375rem 0.75rem;
                                    display: inline-block;
                                    font-size: 1rem;
                                    background-color: white;
                                    width: auto;
                                    height: auto;
                                }
                            </style>
                        @endif
                    </div>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="donateModalLabel">आपके समर्थन के लिए धन्यवाद!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('storage/' . setting('community.payment')) }}" class="img-fluid mb-3" alt="Donation Image">
                    <p>{{ setting('community.donation_text') }}</p>
                    
                    <!-- Bank Details -->
                    <h6>दान के लिए बैंक विवरण :</h6>
                    <ul>
                        <li><strong>बैंक का नाम :</strong> Jodhpur Central District Co-op Bank Ltd</li>
                        <li><strong>खाता संख्या: </strong> 26001101120007842</li>
                        <li><strong>आईएफएससी कोड: </strong> RSCB0026001</li>
                        <li><strong>शाखा कोड:</strong> 26001</li>
                        <li><strong>खाताधारक:</strong> Kanya Kubj Brahman Samaj Jodhpur</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <span class="{{ setting('theme.button_styles') }}">
                        <button type="button" class="button button_header button--pan" data-bs-dismiss="modal">
                            <span>Close</span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
