<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> @yield('title') </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <title>@yield('title')</title>
    <link href="{{ asset('template_user/img/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template_user/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template_user/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template_user/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('template_user/css/style.css') }}" rel="stylesheet">
</head>

<body style="background-color:#e6e6e6">

    <!-- Navbar Start -->
    @include('user.layouts.navbar')
    <!-- Navbar End -->


    @yield('content')

    <br><br><br><br>
    <!-- Footer Start -->
    @include('user.layouts.footer')
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-3">
        <div class="container text-center">
            <p class="mb-1 text-white">Copyright &copy; <a class="fw-semi-bold text-danger" href="{{ route('halaman_utama') }}">Divisi Hukum</a>, All Right Reserved.
            </p>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-danger btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template_user/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template_user/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template_user/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template_user/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template_user/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template_user/lib/counterup/counterup.min.js') }}"></script>

 

    <!-- Template Javascript -->
    <script src="{{ asset('template_user/js/main.js') }}"></script>
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })
    </script>
    

</body>

</html>