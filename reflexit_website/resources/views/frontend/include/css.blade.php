<head>
    <!-- Basic Meta -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>
        @yield('title', config('app.name'))
        @hasSection('title') | {{ config('app.name') }} @endif
    </title>

    <!-- Primary SEO -->
    <meta name="description" content="@yield('meta_description', 'Default website description goes here')">
    <meta name="keywords" content="@yield('meta_keywords', 'software, web development, laravel, reflex it')">
    <meta name="author" content="@yield('meta_author', 'Reflex IT')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">
    <!-- Canonical -->
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/RefLEX IT Logo1.png') }}">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('title', config('app.name'))))">
    <meta property="og:description" content="@yield('og_description', trim($__env->yieldContent('meta_description', 'Default website description goes here')))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:image" content="@yield('og_image', asset('assets/images/seo/default-og.png'))">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <!-- Twitter Card -->
    <meta name="twitter:card" content="@yield('twitter_card', 'summary_large_image')">
    <meta name="twitter:title" content="@yield('twitter_title', trim($__env->yieldContent('title', config('app.name'))))">
    <meta name="twitter:description" content="@yield('twitter_description', trim($__env->yieldContent('meta_description', 'Default website description goes here')))">
    <meta name="twitter:image" content="@yield('twitter_image', asset('assets/images/seo/default-og.png'))">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/off-canvas.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rsmenu-main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rs-spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @stack('head')
</head>
