<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @php $user = Auth::User(); @endphp

    @b2Config

    <script>
        window.b2_user = {
            id: '{{$user->id}}',
            name: '{{$user->name}}',
            email: '{{$user->email}}',
            permissions: @json($user->getPermissionsViaRoles())
        }
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <div class="container py-5">
            <div class="col-md-8 m-auto">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('dashboard') }}"><i class="far fa-tachometer-alt"></i> Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('organisations') }}"><i class="far fa-sitemap"></i> Organisations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('schools') }}"><i class="far fa-school"></i> Schools</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('licences') }}"><i class="far fa-credit-card-blank"></i> Licences</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
