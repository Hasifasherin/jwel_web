<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>@yield('title', 'Wings of Jewels - Fine Jewelry & Products')</title>
    <meta name="description" content="@yield('meta_description', 'Discover timeless elegance with Wings of Jewels. Find affordable and fine jewelry including rings, necklaces, bracelets, earrings, and exquisite products.')">
    <meta name="keywords" content="@yield('meta_keywords', 'fine jewelry, rings, necklaces, bracelets, earrings, gold jewelry, diamond jewelry, women accessories, luxury ornaments')">
    <meta name="author" content="Wings of Jewels">
    
    <!-- Open Graph / social media -->
    <meta property="og:title" content="@yield('title', 'Wings of Jewels - Fine Jewelry')">
    <meta property="og:description" content="@yield('meta_description', 'Discover timeless elegance with Wings of Jewels. Find affordable and fine jewelry including rings, necklaces, bracelets, and earrings.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:image" content="{{ asset('images/logo1.png') }}">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Wings of Jewels - Fine Jewelry')">
    <meta name="twitter:description" content="@yield('meta_description', 'Discover timeless elegance with our handcrafted jewellery.')">
    <meta name="twitter:image" content="{{ asset('images/logo1.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="d-flex flex-column min-vh-100">

    {{-- HEADER --}}
    @include('partials.header')

    {{-- MAIN CONTENT --}}
    <main class="flex-grow-1">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')

    <!-- WhatsApp Floating Button -->
    <a href="https://whatsapp.com/channel/0029Vb78cOdI7BeIwEXAzp32"
       class="whatsapp-float"
       target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 900,
            once: true,
            offset: 80,
            easing: "ease-in-out"
        });
    </script>

    {{-- PAGE SPECIFIC JS --}}
    @stack('scripts')

</body>
</html>