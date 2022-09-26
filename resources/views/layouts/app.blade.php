@include('layouts.config')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>DonExpress</title>

        <meta name="title" content="DonExpress">
        <meta name="description" content="<?php echo "Don Express : application de Livraison de repas" ?>">
        <meta name="keywords" content="<?php echo "Livraison Repas Lomé commander" ?>">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?php echo "Site url" ?>">
        <meta property="og:title" content="DonExpress">
        <meta property="og:description" content="<?php echo "Site description" ?>">
        <meta property="og:image" content="<?php echo "Site url" ?>">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="<?php echo "Site url" ?>">
        <meta property="twitter:title" content="DonExpress">
        <meta property="twitter:description" content="<?php echo "Site description" ?>">
        <meta property="twitter:image" content="<?php echo "Site url" ?>">

        <!-- Fonts -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,900%7CGentium+Basic:400italic%7COpen+Sans:400italic,700italic,400,300,700">

        <!-- Favicon -->
	    <link rel="shortcut icon" href="{{ asset('img/ODAtZmF2ZWljb24-_1591272924.png') }}" type="image/png" />

        <!-- Styles -->
        <!-- Plugins -->
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/tt.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('js/minified/themes/default.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/jquery-confirm.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/flag-icon.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('js/file_upload/fileinput.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/scrolls.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body<?=(page?' class="pt-'.page.'page"':'')?>>
        @include('layouts.header')
            {{ $slot }}
    @stack('script')