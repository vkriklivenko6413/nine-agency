<!DOCTYPE html>
<!-- saved from url=(0076)https://6676ba45ff107b7cb93e50ce-%2Dsparkly-licorice-24b8a0.netlify.app/home -->
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>@yield('title')</title>
        <meta name="format-detection" content="telephone=no" />
        <!-- <style>body{opacity: 0;}</style> -->
        <link rel="stylesheet" href="/website-src/css/style.min.css" />
        <link rel="stylesheet" href="/website-src/css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="/website-src/css/style.css" />
        <link
            rel="shortcut icon"
            href="https://6676ba45ff107b7cb93e50ce--sparkly-licorice-24b8a0.netlify.app/favicon.ico"
        />
        <!-- <meta name="robots" content="noindex, nofollow"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <captcha-widgets></captcha-widgets>
    </head>

    <body style="" class="dark">
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
