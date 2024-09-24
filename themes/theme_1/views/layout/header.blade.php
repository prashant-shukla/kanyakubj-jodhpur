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
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="{{ asset('storage/' . setting('community.favicon')) }}" type="image/icon type">

</head>

<body class="roboto-body-text">
  <!-- header section start -->
  <header class="bg-body-tertiary sticky-top" id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-2 px-lg-5 shadow-sm">
      <div class="container-fluid">
        <a class="navbar-brand fw-bolder playfair-display-heading" href="/">{{ setting('community.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link @stack('home_active')" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @stack('about_active')" href="about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @stack('events_active')" href="events">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @stack('members_active')" href="members">Members</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @stack('gallery_active')" href="gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @stack('achievers_active')" href="achievers">Achievers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @stack('tribute_active')" href="tribute">Tribute</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @stack('contact_active')" href="contact">Contact Us</a>
            </li>
          </ul>
          <div class="d-flex align-items-center ms-3">
            <button class="button_header button--pan mx-2"><span>Donate</span></button>
            <a href="/register"><button class="button_header button--pan"><span>Register</span></button></a>
            <div id="google_translate_element"></div>

            <style>
              /* Hide the default Google Translate dropdown text and logo */
              .goog-logo-link, .goog-te-gadget span, .goog-te-banner-frame {
                display: none !important;
              }

              /* Custom styling for the Google Translate dropdown */
              #google_translate_element select {
                background-color: white;
                border: 1px solid #ced4da;
                padding: 0.375rem 2.25rem 0.375rem 0.75rem;
                border-radius: 0.25rem;
                font-size: 1rem;
                display: inline-block;
                height: auto;
                appearance: none; /* Remove the default select arrow for a cleaner look */
              }

              /* Center select vertically */
              .d-flex.align-items-center {
                align-items: center;
              }
            </style>

            <script type="text/javascript">
              function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                  pageLanguage: 'en',
                  includedLanguages: 'en,hi,bn,gu,kn,ml,mr,pa,ta,te',
                  layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                }, 'google_translate_element');
              }
            </script>

            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- header section end -->

  


