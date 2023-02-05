<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="robots" content="noindex,nofollow" />
        @include('parts.style')
    </head>

    <body data-style="default">
        <div>@yield('content')</div>
        @include('parts.script')
    </body>
</html>
