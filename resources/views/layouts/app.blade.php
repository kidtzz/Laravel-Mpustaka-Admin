<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="robots" content="noindex,nofollow" />

        <link
            rel="shortcut icon"
            type="image/x-icon"
            href="{{ asset('images/logo_manggala_pustaka_white.ico') }}"
        />

        <title>M-Pustaka</title>

        @include('parts.style')

        <!-- @stack('addon-style') -->
    </head>

    <body id="home-version-1" class="home-version-1" data-style="default">
        <div id="site">
            <div class="col py-0">
                <div class="d-block">@include('parts.navbar')</div>
            </div>
            <div class="d-flex">
                <div class="col-lg-2 col-md-0">@include('parts.sidebar')</div>
                <div class="col py-5">
                    <div class="d-block py-3">
                        <!-- --- -->
                        @yield('content')
                        <!-- --- -->
                        <div class="footer-content">
                            @include('parts.footer')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('parts.script') @include('parts.custom-script')
    </body>
</html>
