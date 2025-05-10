<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Dilhan Motors')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="@yield('meta_description', 'Discover the best of Sri Lanka with King Sri Lanka Tours. Explore beaches, culture, and wildlife across the island.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Sri Lanka Tours, Sri Lanka Tourism, Beach Tours, Wildlife Safaris, Cultural Tours')">
    <meta name="author" content="@yield('meta_author', 'King Sri Lanka Tours')">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="@yield('meta_og_title', 'King Sri Lanka Tours - Explore the Beauty of Sri Lanka')">
    <meta property="og:description" content="@yield('meta_og_description', 'King Sri Lanka Tours offers unforgettable travel experiences in Sri Lanka.')">
    <meta property="og:image" content="@yield('meta_og_image', asset('assets/front/images/og-image.jpg'))">
    <meta property="og:url" content="@yield('meta_og_url', url()->current())">
    <meta property="og:type" content="website">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('meta_og_title', 'King Sri Lanka Tours - Explore the Beauty of Sri Lanka')">
    <meta name="twitter:description" content="@yield('meta_og_description', 'King Sri Lanka Tours offers unforgettable travel experiences in Sri Lanka.')">
    <meta name="twitter:image" content="@yield('meta_og_image', asset('assets/front/images/og-image.jpg'))">

    <!-- Canonical Tag -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link href="{{ asset('assets/front/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/front/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: white;
            border-radius: 50%;
            padding: 15px;
            font-size: 24px;
            z-index: 1000;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
        }
    
        .whatsapp-float:hover {
            background-color: #128C7E;
            color: white;
            text-decoration: none;
        }
    </style>
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar -->
    @yield('navBar', view('component.navBar'))

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    @yield('footer', view('component.footer'))

    <a href="https://wa.me/94771234567" class="whatsapp-float" target="_blank" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/front/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/front/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/front/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/front/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/front/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/front/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
</body>

</html>
