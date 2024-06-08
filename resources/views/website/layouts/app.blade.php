<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="next-head-count" content="2" />
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preload" href="{{ asset('website/_next/static/css/7829407dc6bca8ce.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('website/_next/static/css/7829407dc6bca8ce.css') }}" data-n-g="" />
    <link rel="stylesheet" href="{{ asset('website/popup.css') }}" data-n-g="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <noscript data-n-css=""></noscript>
    <style data-href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap">
        @font-face {
            font-family: "Outfit";
            font-style: normal;
            font-weight: 100;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4TC0C4I.woff) format("woff");
        }

        @font-face {
            font-family: "Outfit";
            font-style: normal;
            font-weight: 200;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4bC1C4I.woff) format("woff");
        }

        @font-face {
            font-family: "Outfit";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4W61C4I.woff) format("woff");
        }

        @font-face {
            font-family: "Outfit";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4TC1C4I.woff) format("woff");
        }

        @font-face {
            font-family: "Outfit";
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4QK1C4I.woff) format("woff");
        }

        @font-face {
            font-family: "Outfit";
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4e6yC4I.woff) format("woff");
        }

        @font-face {
            font-family: "Outfit";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4deyC4I.woff) format("woff");
        }

        @font-face {
            font-family: "Outfit";
            font-style: normal;
            font-weight: 800;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4bCyC4I.woff) format("woff");
        }

        @font-face {
            font-family: "Outfit";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/outfit/v11/QGYyz_MVcBeNP4NjuGObqx1XmO1I4ZmyC4I.woff) format("woff");
        }

        @font-face {
            font-family: "Outfit";
            font-style: normal;
            font-weight: 100 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/outfit/v11/QGYvz_MVcBeNP4NJuktqUYLkn8BJ.woff2) format("woff2");
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0,
                U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        @font-face {
            font-family: "Outfit";
            font-style: normal;
            font-weight: 100 900;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/outfit/v11/QGYvz_MVcBeNP4NJtEtqUYLknw.woff2) format("woff2");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329,
                U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
</head>

<body>
    <div id="__next">
        <div class="bg-background h-[100vh] overflow-auto">
            <div class="flex flex-col m-auto">

                @include('website.includes.header')

                <div class="m-container">

                    @yield('content')

                </div>

                @include('website.includes.footer')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script id="__NEXT_DATA__"
      type="application/json">{"props":{"pageProps":{}},"page":"/projects/[id]","query":{},"buildId":"HHfwSIK-uKDjMLJ5MIHze","nextExport":true,"autoExport":true,"isFallback":false,"scriptLoader":[]}</script>
    <script>
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 5,
            effect: 'cube',

            navigation: {
                nextEl: '.swiper-b-button-next',
                prevEl: '.swiper-b-button-prev',
            },
        });
    </script>
</body>

</html>
