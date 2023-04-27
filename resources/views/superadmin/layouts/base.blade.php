<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> @yield('title') </title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template_user/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('template_admin/css/skin_admin.css') }}">
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
                <img src="{{ asset('template_user/img/logo.png') }}" class="fa-1x"> 
                <h2 class="m-2">DIH UB</h2>
            </a>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="search">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                  <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                      <i class="fas fa-search"></i>
                                    </button>
                                  </div>
                                </div>
                              </form>
                        </div>
                        <ul class="navbar-nav header-right">                         
                            <li class="nav-item dropdown">
                                <a href="{{ route('superadmin.logout') }}">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        @include('superadmin.layouts.sidebar')

        <div class="content-body">
            <div class="container-fluid">
				  @yield('content')  
            </div>
            <div class="container">
                @yield('calendar')
            </div>
            
        </div>
        
        
        @include('superadmin.layouts.footer')
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
    <script src="{{ asset('template_admin/plugins/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('template_admin/plugins/chart.js/Chart.min.js') }}"></script>
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
<script src="{{ asset('template_admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@yield('js')
</body>
</html>