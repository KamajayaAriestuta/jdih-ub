@extends('user.layouts.base')
@section('title', 'Kontak')
@section('content')
<div class="container-fluid page-header py-5 mb-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Hubungi Kami</h1>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 justify-content-center mb-5">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-light text-center h-100 p-5">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-envelope-open fa-2x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Email Address</h4>
                    <p class="mb-2">htl.ub.ac.id</p>
                    <a class="btn btn-primary px-4" href="mailto:htl@ub.ac.id">Email Now <i
                            class="fa fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-light text-center h-100 p-5">
                    <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                    </div>
                    <h4 class="mb-3">Office Phone</h4>
                    <p class="mb-2">+62 821 3309 0908</p>
                    <a class="btn btn-primary px-4" href="https://wa.me/6282133090908"
                        target="blank">Call Now? <i class="fa fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <iframe class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15805.50361238209!2d112.59460982238201!3d-7.960048957226629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827f2d620975%3A0xf19b7459bbee5ed5!2sUniversitas%20Brawijaya!5e0!3m2!1sid!2sid!4v1680600036461!5m2!1sid!2sid"
                    frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection