<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', env('APP_NAME'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Include livewire CSS -->
    @livewireStyles
    <!-- Include Filament CSS -->
    @filamentStyles

    <link
        href="http://localhost:8000/css/filament/filament/app.css"
        rel="stylesheet"
        data-navigate-track
    />

    <style>
        /* Add a simple fade-in effect */
        .fade-in {
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }
        

        /* Flip animation for the icon */
        @keyframes flipOnce {
            0% {
                transform: rotateY(270deg);
            }
            100% {
                transform: rotateY(360deg);
            }
        }

        .animate-flip-once {
            animation: flipOnce 1s linear 1;
        }

         /* Text grow animation */
        @keyframes growText {
            0% {
                transform: scale(0.75);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .animate-grow-text {
            animation: growText 1s ease-out forwards;
        }
    </style>

</head>
<body style="background: #FF671F;" >
    <div class="container">
        @yield('content')
    </div>
    @livewireScripts
    @filamentScripts

</body>
</html>
