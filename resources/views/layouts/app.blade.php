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


</head>
<body style="background: #FF671F;" >
    <div class="">
        @yield('content')
    </div>

    @livewireScripts
    @filamentScripts

</body>
</html>
