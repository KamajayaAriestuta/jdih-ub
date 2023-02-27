<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template_admin/images/favicon.png') }}">
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
<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('template_admin/images/logo-white-2.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('template_admin/images/logo-text-white.png') }}" alt="">
                <img class="brand-title" src="{{ asset('template_admin/images/logo-text-white.png') }}" alt="">
            </a>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="{{ asset('template_admin/images/profile/education/pic1.jpg') }}" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="{{ route('admin.logout') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
@include('admin.layouts.sidebar')
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				  @yield('content')  
                
            </div>
        </div>
        @include('admin.layouts.footer')
    </div>
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