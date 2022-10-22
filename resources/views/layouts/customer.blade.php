<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/logo/navbar.svg') }}" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    @stack('scripts')
    <title>{{ $title }}</title>
</head>

<body>

    {{ $slot }}

</body>

</html>
