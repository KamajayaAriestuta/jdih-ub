@extends('user.index')
@section('content_user')


<h2 class="display-5 text-center">Jumlah Produk Hukum</h2>
    <p class="fw-medium text-uppercase text-primary text-center mb-5">Jumlah Keseluruhan Produk Hukum DIH UB</p>
    <br>

    <!-- Facts Start -->
    <div class="container-fluid">
        <div class="row g-5">
            <div class="col-sm wow fadeIn service-item m-2" data-wow-delay="0.1s">
                <div class="text-center p-5">
                    <i class="fa fa-building fa-3x mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">108</h1>
                    <span class="fs-5 fw-semi-bold">Peraturan Nasional</span>
                </div>
            </div>
            <div class="col-sm wow fadeIn service-item m-2" data-wow-delay="0.3s">
                <div class="text-center p-5">
                    <i class="fa fa-tree fa-3x mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">135</h1>
                    <span class="fs-5 fw-semi-bold">Peraturan Daerah</span>
                </div>
            </div>
            <div class="col-sm wow fadeIn service-item m-2" data-wow-delay="0.5s">
                <div class="text-center p-5">
                    <i class="fa fa-university fa-3x mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">957</h1>
                    <span class="fs-5 fw-semi-bold">Peraturan Universitas</span>
                </div>
            </div>
        </div>
    </div> 
    

    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">News</p>
                <h1 class="display-5 mb-4">Produk Hukum Terbaru</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('template_user/img/produkhukum.jpeg') }}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('template_user/img/file.png') }}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Nama Produk Hukum Terbaru 1</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                    lorem sed diam stet diam sed stet.</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('template_user/img/produkhukum.jpeg') }}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('template_user/img/file.png') }}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Nama Produk Hukum Terbaru 2</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                    lorem sed diam stet diam sed stet.</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('template_user/img/produkhukum.jpeg') }}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('template_user/img/file.png') }}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Nama Produk Hukum Terbaru 3</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                    lorem sed diam stet diam sed stet.</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection