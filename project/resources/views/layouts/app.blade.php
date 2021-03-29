<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body id="page-top">
@include('layouts._partials.navbar')

<!-- About-->
<section class="about-section text-center" id="about" style="height: 100vh">
    @yield('content')
</section>
@yield('scripts')
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

