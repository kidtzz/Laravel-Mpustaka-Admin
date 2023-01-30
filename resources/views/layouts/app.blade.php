<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="robots" content="noindex,nofollow" />

        <title>Laravel-Modtel</title>

        @include('parts.style')

        <!-- @stack('addon-style') -->
    </head>

    <body id="home-version-1" class="home-version-1" data-style="default">
        <div id="site">
            @include('parts.navbar')
            <!-- --- -->
            @yield('content')
            <!-- --- -->
            @include('parts.footer')
        </div>

        @include('parts.script')
    </body>
</html>
