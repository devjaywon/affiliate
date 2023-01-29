<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') | {{ config('app.name', 'Affiliate') }}</title>
 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/sign-in.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/product-page.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/account.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/affiliate-page.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/registration.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/creator-page.css') }}">
 <link rel="stylesheet" href="{{ asset('assets/css/withdrawal-request.css') }}">

 <link rel="shortcut icon" href="/images/IMG-20221209-WA0000.jpg" type="image/x-icon">
    <title>Affliate</title>
</head>

<body>

    {{ $slot }}



<script src="{{ asset('assets/js/index.js') }}"></script>
</body>
</html>