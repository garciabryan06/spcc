<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SPCC Enrollment') }}</title>

    <!-- Main Styles -->
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('adminlte/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/skins/skin-blue.min.css') }}">

    @yield('styles')

    <!-- Custom Style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div id="app" class="wrapper">
        <main class="py-4">

            <header class="main-header">
                <a href="index2.html" class="logo">
                  <span class="logo-mini"><b>SP</b>CC</span>
                  <span class="logo-lg"><b>SP</b>CC</span>
                </a>

                @include('inc.navbar')
            </header>

            @include('inc.sidebar')
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content-header">
                    @yield('page-heading')
                </section>

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->

            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                  Anything you want
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
            </footer>
            
        </main>

        <!-- Main scripts -->
        <!-- jQuery 2.2.3 -->
        <script src="{{ asset('adminlte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{ asset('adminlte/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('adminlte/dist/js/app.min.js') }}"></script>

        @yield('scripts')
    </div>
</body>
</html>
