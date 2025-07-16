<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Primary Meta Tags -->
        <title>{{ config('app.name', 'NextGenTraderAI') }} - @yield('title')</title>
        <meta name="title" content="{{ config('app.name', 'NextGenTraderAI') }} - @yield('title')">
        <meta name="description" content="Advanced AI trading bot platform. NextGenTraderAI delivers sophisticated algorithmic trading solutions, professional market analysis, and automated trading strategies for cryptocurrency and forex markets.">
        <meta name="keywords" content="AI trading bot, algorithmic trading, automated trading, cryptocurrency trading, forex trading, trading algorithms, market analysis, trading automation, NextGenTraderAI, professional trading platform, trading solutions, automated market analysis, AI market prediction, trading strategies">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ config('app.name', 'NextGenTraderAI') }} - @yield('title')">
        <meta property="og:description" content="Experience the future of trading with NextGenTraderAI. Our advanced AI-powered platform provides sophisticated trading algorithms and automated market analysis for optimal trading performance.">
        <meta property="og:image" content="{{ asset('images/logo.png') }}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url()->current() }}">
        <meta property="twitter:title" content="{{ config('app.name', 'NextGenTraderAI') }} - @yield('title')">
        <meta property="twitter:description" content="Experience the future of trading with NextGenTraderAI. Our advanced AI-powered platform provides sophisticated trading algorithms and automated market analysis for optimal trading performance.">
        <meta property="twitter:image" content="{{ asset('images/logo.png') }}">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo.png') }}">
        <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('images/logo.png') }}" color="#1A1F36">
        <meta name="msapplication-TileColor" content="#1A1F36">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
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