<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>@yield('title')</title>
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template_user/img/logo.png') }}">
<link rel="stylesheet" href="{{ asset('template_admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
<link rel="stylesheet" href="{{ asset('template_admin/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('template_admin/css/skin.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="{{ asset('template_admin/plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('template_admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
<link rel="stylesheet" href="{{ asset('template_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('template_admin/dist/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ asset('template_admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<link rel="stylesheet" href="{{ asset('template_admin/plugins/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('template_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('template_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('template_admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</head>
<body class="h-100">
    <section class="content">
        <div class="error-page">
            <h2 class="headline text-warning"> 404</h2>
            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Your Account is not yet Actived by Admin.</h3>
                <p>You can call Admin. Meanwhile, you may <a href="/">return to dashboard</a></p>
            </div>
        </div>
    </section>
<script src="{{ asset('template_admin/vendor/global/global.min.js')}} "></script>
<script src="{{ asset('template_admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}} "></script>
<script src="{{ asset('template_admin/js/custom.min.js')}} "></script>
<script src="{{ asset('template_admin/vendor/raphael/raphael.min.js')}} "></script>
<script src="{{ asset('template_admin/vendor/morris/morris.min.js')}} "></script>
<script src="{{ asset('template_admin/vendor/peity/jquery.peity.min.js')}} "></script>
<script src="{{ asset('template_admin/js/dashboard/dashboard-2.js')}} "></script>
<script src="{{ asset('template_admin/vendor/svganimation/vivus.min.js')}} "></script>
<script src="{{ asset('template_admin/vendor/svganimation/svg.animation.js')}} "></script>
<script src="{{ asset('template_admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
{{-- <script src="{{ asset('template_admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
<script src="{{ asset('template_admin/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('template_admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('template_admin/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('template_admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('template_admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@yield('js')
</body>
</html>