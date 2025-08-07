<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'SalakaTech - Solusi Digital UMKM')</title>

    {{-- Aset Favicon & Meta --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-title" content="SalakaTech">
    <meta name="application-name" content="SalakaTech">
    
    {{-- Script Eksternal --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="bg-white text-gray-800">

    {{-- Kita panggil Navbar Publik --}}
    @include('layouts.partials.public-navbar')

    <main>
        @yield('content')
    </main>

    {{-- Kita panggil Footer Publik --}}
    @include('layouts.partials.public-footer')

    {{-- Script untuk Feather Icons & Burger Menu --}}
    <script>
        feather.replace()

        const burger = document.getElementById('burger');
        const menu = document.getElementById('menu');
        if (burger) {
            burger.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>