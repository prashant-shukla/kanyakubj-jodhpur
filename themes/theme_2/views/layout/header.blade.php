<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
<body>
<header>
    <nav class="navbar navbar-expand-lg py-3 navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                Community</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar3" aria-controls="myNavbar3" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="lc-block collapse navbar-collapse" id="myNavbar3">
                <div lc-helper="shortcode" class="live-shortcode ms-auto"> <!--  lc_nav_menu -->
                    <ul id="menu-menu-1" class="navbar-nav">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-32739"><a href="https://library.livecanvas.com/starters" class="nav-link ">BS5 Page Templates</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home nav-item nav-item-32738"><a href="https://library.livecanvas.com/sections/" class="nav-link ">BS5 Snippets</a></li>
                    </ul> <!-- /lc_nav_menu -->
                </div>
                <div class="lc-block ms-auto d-grid gap-2 d-lg-block"><a class="btn link-secondary" href="#" role="button">Sign in</a>
                    <a class="btn btn-primary" href="#" role="button">Sign up</a>
                </div>
            </div>
        </div>
    </nav>
</header>