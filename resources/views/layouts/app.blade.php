<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Primary Meta Tags -->
        <title>{{ config('app.name', 'Trifecta Professional Services Limited') }} - @yield('title')</title>
        <meta name="title" content="{{ config('app.name', 'Trifecta Professional Services Limited') }} - @yield('title')">
        <meta name="description" content="Leading security and professional services provider in Uganda. Trifecta Professional Services Limited delivers comprehensive security solutions, professional training, and expert consultancy services for businesses and organizations.">
        <meta name="keywords" content="security services Uganda, professional security company, security consultancy, security training Uganda, corporate security solutions, security guard services, professional security training, security risk management, security consulting firm, Uganda security company, professional security services, security management Uganda, corporate protection services, security expertise Uganda">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ config('app.name', 'Trifecta Professional Services Limited') }} - @yield('title')">
        <meta property="og:description" content="Your trusted partner in professional security services. Trifecta Professional Services Limited provides comprehensive security solutions, training, and consultancy services across Uganda.">
        <meta property="og:image" content="{{ asset('images/logo.jpg') }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="{{ config('app.name', 'Trifecta Professional Services Limited') }} - @yield('title')">
        <meta property="twitter:description" content="Your trusted partner in professional security services. Trifecta Professional Services Limited provides comprehensive security solutions, training, and consultancy services across Uganda.">
        <meta property="twitter:image" content="{{ asset('images/logo.jpg') }}">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.jpg') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.jpg') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo.jpg') }}">
        <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('images/logo.jpg') }}" color="#13AFD1">
        <meta name="msapplication-TileColor" content="#13AFD1">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <!-- Header -->
        @include('layouts.partials.header')

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        @include('layouts.partials.footer')
    </body>
</html>