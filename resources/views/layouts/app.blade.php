<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
    <script src="{{ asset('theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/js/popper.min.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('theme/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('theme/js/moment.min.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src{{ asset('theme/plugins/daterangepicker/daterangepicker.js') }}"></script>

    <script src="{{ asset('theme/js/owl.carousel.min.js') }}"></script>

    <script src{{ asset('theme/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ asset('theme/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
    <script src="{{ mix('js/theme.js') }}"></script>
    <script src="{{ mix('/js/build.js') }}"></script>
</html>
