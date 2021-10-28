
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('css')
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @show
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('layouts.experiment.partials.top-navbar')
    @include('layouts.experiment.partials.left')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <strong></strong>
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
 <!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
<!-- ./wrapper -->
</body>
</html>
