<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@stack('title') | B2 Systems</title>
    <meta name="description" content="@stack('description')">
    <meta name="robots" content="index, follow" />

    {{-- <meta name="description" content="@stack('description')"/>
    <link rel="canonical" href="https://www.paragosoftware.com/" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="MAT &amp; School Asset Manager Software Made Simple - Parago" />
    <meta property="og:description" content="The only asset manager solution developed in conjunction with schools &amp; districts, academies &amp; multi academy trusts. Contact us today to find out more!" />
    <meta property="og:url" content="https://www.paragosoftware.com/" />
    <meta property="og:site_name" content="Parago" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="The only asset manager solution developed in conjunction with schools &amp; districts, academies &amp; multi academy trusts. Contact us today to find out more!" />
    <meta name="twitter:title" content="MAT &amp; School Asset Manager Software Made Simple - Parago" />
    <script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/www.paragosoftware.com\/","name":"Parago","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.paragosoftware.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script> --}}

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

    <script>
      window.intercomSettings = {
        app_id: "n2sb33ro",
        background_color: '#008080'
      };
    </script>
    <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/n2sb33ro';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
</body>
</html>
