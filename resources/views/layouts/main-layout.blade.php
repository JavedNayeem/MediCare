<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->

    <!-- Scripts -->
    <script src="/js/app.js"></script>


    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/css/dist/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/dist/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/css/dist/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/css/dist/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/css/dist/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/css/dist/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/css/dist/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/css/dist/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/css/dist/bootstrap3-wysihtml5.min.css">
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('medicare.partials.main-header')

<!-- Left side column. contains the logo and sidebar -->
@include('medicare.partials.main-sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('content-header')
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@include('medicare.partials.footer')

<!-- Control Sidebar -->
@include('medicare.partials.control-sidebar')
<!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/js/dist/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="/js/dist/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/js/dist/morris.min.js"></script>
<!-- Sparkline -->
<script src="/js/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/js/dist/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/js/dist/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/js/dist/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="/js/dist/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/js/dist/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/js/dist/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/js/dist/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/js/dist/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/js/dist/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/js/dist/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/js/dist/demo.js"></script>
</body>


</html>
