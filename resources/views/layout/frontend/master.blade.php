<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            @yield('title')
        </title>

        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" href="{{ asset('css/app.css')}} ">

        @stack('header-scripts')

        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        @include('layout.frontend._header')
        <div id="content-container">
            @yield('content')
        </div>
		@include('layout.frontend._footer')
        {{-- <script src="{{ asset('js/foundation.js')}} "></script> --}}
        <script src="{{ asset('js/app.js')}} "></script>
        @stack('footer-scripts')
    </body>
</html>
