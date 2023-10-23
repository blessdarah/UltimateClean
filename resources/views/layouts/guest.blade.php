<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts/partials/header-scripts')

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css']) --}}
</head>

<body>
    <x-pages.preloader />
    <x-pages.hero />
    {{ $slot }}
    <x-pages.footer />
    @include('layouts/partials/search-modal')
    @include('layouts/partials/extra-info')

    @include('layouts/partials/footer-scripts')
</body>

</html>
