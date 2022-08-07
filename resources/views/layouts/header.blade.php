<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>{{ config('app.name', 'Portfolio') }}</title>
    <meta name="description" content="">
    <meta name="author" content="WebThemez">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/isotope.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('js/fancybox/jquery.fancybox.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/da-slider.css') }}" />
    <!-- Owl Carousel Assets -->
    <link href="{{ asset('js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <!-- Font Awesome -->
    <link href="{{ asset('font/css/font-awesome.min.css') }}" rel="stylesheet">
</head>