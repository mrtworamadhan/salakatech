<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'SalakaTech - Solusi Digital Terdepan')</title>

    {{-- Aset Favicon & Meta --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta name="theme-color" content="#020617">
    <meta name="description" content="PT Cahya Salaka Tech - Partner transformasi digital terpercaya untuk UMKM, Instansi, dan Korporasi.">
    
    {{-- Script Eksternal --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/feather-icons"></script>
</head>

{{-- UPDATED: Background Gelap Corporate --}}
<body class="bg-[#020617] text-slate-300 antialiased selection:bg-cyan-500 selection:text-white">

    {{-- Navbar (Include file partial navbar kamu, pastikan navbarnya support dark mode ya bro) --}}
    {{-- Kalau navbar masih hardcode putih, nanti kabari, kita gelapin juga --}}
    @include('layouts.partials.public-navbar')

    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.partials.public-footer')

    <script>
        feather.replace()
    </script>
</body>
</html>