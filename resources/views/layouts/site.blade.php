<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script>
        window.b2_systems = {
            site_url: '{{ config('app.url') }}',
            api_prefix: '{{ config('app.api_prefix') }}'
        }
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ mix('css/site.css') }}" rel="stylesheet">

    @stack('header_scripts')
</head>
<body>
    <div id="web">
        @component('_partials.site-header')
        @endcomponent

        @yield('below_nav')

        @yield('content')

        @component('_partials.site-footer')
        @endcomponent
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/web.js') }}"></script>
    @stack('scripts')
</body>
</html>
