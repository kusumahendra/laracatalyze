<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Laracatalyze - @yield('content-title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="{{ asset('assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">

        @stack('header-scripts')

        <link rel="stylesheet" href="{{ asset('assets/adminlte/dist/css/AdminLTE.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/adminlte/dist/css/skins/skin-red.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">

        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <style>
            .box-body > .alert { margin-bottom: -10px; }

            section.content .form {
                border-left: 1px solid #eee;
            }
        </style>
    </head>

    <body class="hold-transition skin-red sidebar-mini">

        <div class="wrapper">
            @include('layout.backend._header')

            @include('layout.backend._sidebar')

            <div class="content-wrapper">
                {{-- @include('layout.backend._alert') --}}
                <section class="content-header">
                    <h1>
                        @yield('content-title')
                    </h1>
                </section>

                {{-- @include('backend.layout._alert') --}}

                @yield('backend.content')
            </div>

            @include('layout.backend._footer')
        </div>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
        <script src="{{ asset('assets/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
        <script src="{{ asset('assets/adminlte/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('js/admin.js') }}"></scrip
        <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>

        @stack('footer-scripts')
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{ asset('js/common.js') }}"></script>
        @if (session('success-message'))
            <script>
                swal("{{ session('success-message') }}", "" , "success");
            </script>
        @endif
        <script>

        </script>
    </body>
</html>
