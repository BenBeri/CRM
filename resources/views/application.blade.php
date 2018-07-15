<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/application.css') }}" rel="stylesheet">
    </head>
    <body>
    @yield('content')
    </body>
</html>
