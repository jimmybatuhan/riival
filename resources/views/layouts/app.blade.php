<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Riival E-Sport Coaching Platform') }}</title>
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <!-- Styles -->
    <link href="{{ mix('css/theme.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
    {{-- Add here the routes that is not rendered by vue --}}
    @if(Route::is(['login', 'register']))
        <body>
            @yield('content')
        </body>
    @else
        @yield('vue-app')
    @endif
    <script src="{{ mix('js/theme.js') }}"></script>
    @if(!Route::is(['login', 'register']))
        <script src="{{ mix('js/app.js') }}"></script>
    @endif
</html>
