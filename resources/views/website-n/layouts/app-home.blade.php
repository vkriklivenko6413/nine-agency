<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta name="format-detection" content="telephone=no" />
    <!-- <style>body{opacity: 0;}</style> -->
    <link rel="stylesheet" href="/website-src/css/style.min.css" />
    <link rel="stylesheet" href="/website-src/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/website-src/css/style.css" />
    <link rel="stylesheet" href="/website-src/css/popup.css" />
    <link rel="shortcut icon" href="{{ Storage::url($websiteVariables->website_logo ?? '') }}" />
    <!-- <meta name="robots" content="noindex, nofollow"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body style="" class="dark {{ app()->getLocale() === 'ru' ? 'body-ru' : '' }}">
    <div class="wrapper">

        @include('website-n.includes.header')

        @yield('main')

        @include('website-n.includes.footer')

    </div>

    <script src="/website-src/js/swiper-bundle.min.js"></script>
    <script src="/website-src/js/script.js"></script>
    <script src="/website-src/js/app.min.js"></script>

</body>

</html>
