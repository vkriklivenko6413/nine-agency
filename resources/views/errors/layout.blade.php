@extends('website-n.layouts.app')

@section('main')
    <div
        style="
                font-family: system-ui, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji',
                  'Segoe UI Emoji';
                height: 100vh;
                text-align: center;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
              ">
        <div style="line-height: 48px">
            <style>
                body {
                    margin: 0;
                }

                .next-error-h1 {
                    border-right: 1px solid rgba(0, 0, 0, 0.3);
                }

                @media (prefers-color-scheme: dark) {
                    body {
                        color: #fff;
                        background: #000;
                    }

                    .next-error-h1 {
                        border-right: 1px solid rgba(255, 255, 255, 0.3);
                    }
                }
            </style>
            <h1 class="next-error-h1"
                style="
                    display: inline-block;
                    margin: 0 20px 0 0;
                    padding-right: 23px;
                    font-size: 24px;
                    font-weight: 500;
                    vertical-align: top;
                  ">
                @yield('code')
            </h1>
            <div style="display: inline-block">
                <h2 style="font-size: 14px; font-weight: 400; line-height: 28px">
                    @yield('message')
                </h2>
            </div>
        </div>
    </div>
@endsection
