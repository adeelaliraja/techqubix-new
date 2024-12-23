<!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="@yield('meta_keywords', 'digital marketing, SEO, GrowMark')">
    <meta name="description" content="@yield('meta_description', 'GrowMark - Your digital marketing solution')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'GrowMark - Digital Marketing HTML Template')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Vite CSS -->
    @vite([
    'resources/css/style.css',
    'resources/css/bootstrap.min.css',
    'resources/lib/lightbox/css/lightbox.min.css',
    'resources/css/app.css',
    ])
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Header -->
    @include('partials.header')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('partials.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-dark btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "TechQubix",
            "url": "https://techqubix.com",
            "logo": "https://techqubix.com/images/logo.webp",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+123456789",
                "contactType": "Customer Support"
            }
        }
    </script>

    <!-- Vite JS -->
    @vite([
        'resources/lib/wow/wow.js',
        'resources/lib/easing/easing.js',
        'resources/lib/waypoints/waypoints.min.js',
        'resources/lib/owlcarousel/owl.carousel.min.js',
        'resources/lib/lightbox/js/lightbox.js',
        'resources/js/bootstrap.js',
        'resources/js/main.js',
        'resources/js/app.js',
    ])
</body>

</html>
