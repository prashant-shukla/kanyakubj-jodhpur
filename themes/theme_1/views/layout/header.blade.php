<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Kanyakubj')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset("theme_1/css/style.css")}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Slick Slider CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body class="roboto-body-text">
  <!-- header section start -->
  <header class="bg-body-tertiary" id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-2 px-lg-5 shadow-sm">
      <div class="container-fluid">
        <a class="navbar-brand fw-bolder playfair-display-heading" href="#">Community</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link @stack('home_active')" aria-current="page" href="home">Home</a>
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
              <a class="nav-link @stack('events_active')" href="achievers">Achievers</a>
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
            <button class="button_header button--pan"><span>Register</span></button>
            <select class="form-select d-inline-block w-auto ms-3">
              <option value="en" selected>English</option>
              <option value="hi">Hindi</option>
            </select>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- header section end  -->