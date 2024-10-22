<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta name="format-detection" content="telephone=no" />
    <!-- <style>body{opacity: 0;}</style> -->
    <link rel="stylesheet" href="/website-src/css/style.min.css" />
    <link rel="shortcut icon" href="{{ Storage::url($websiteVariables->website_logo ?? '') }}" />
    <!-- <meta name="robots" content="noindex, nofollow"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <captcha-widgets></captcha-widgets>
</head>

<body style="" class="{{ app()->getLocale() === 'ru' ? 'body-ru' : '' }}">
    <div class="wrapper">

        @include('website-n.includes.header')

        @yield('main')

        @include('website-n.includes.footer')

    </div>

    <script src="/website-src/js/app.min.js"></script>
</body>

</html>
