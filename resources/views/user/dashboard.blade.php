@extends('user.index')
@section('title', 'Dokumentasi dan Informasi Hukum')
@section('content_user')
<div class="container-xl pt-2">
    <div class="container">
        <h2 class="display-5 text-center mt-3">Produk Terbaru</h2>
        <p class="fw-medium text-uppercase text-primary text-center mb-2">Produk Hukum Terkini</p>    
        <div class="row mt-3">
            @foreach ($produk_berlaku as $produk)
            <div class="col-xs-12 col-sm-4">
                    <div class="card-peraturan">
                        <div class="card-content">
                            <h5 class="card-title">
                                <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                    {{ $produk->kategori->nama_kategori }} No {{ $produk->nomor }}
                                </a>
                            </h5>
                            <p class="">
                                {{ $produk->perihal }}                        
                            </p>
                                <button class="btn-success mb-2">Berlaku</button>
                                <button class="btn-warning mb-2">{{$produk->tahun}}</button>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>


</div>
<div class="p-3 mt-5" style="background-image: url('storage/file/lawimage.png'); height: 50vh">           
    <h5 class="fw-medium text-uppercase text-center mb-4 mt-4 text-white z-2">Jumlah Keseluruhan Produk Hukum DIH UB</h5>
        <div class="row col-sm-12">
            <div class="col-sm-4">
                <div class="text-center">
                    <i class="fa fa-building fa-3x mt-3 text-white"></i>
                    <h1 class="display-2 text-primary text-white" data-toggle="counter-up">{{ $sum_nasional }}</h1>
                    <span class="fs-5 fw-semi-bold text-white">Peraturan Nasional</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-center">
                    <i class="fa fa-building fa-3x mt-3 text-white"></i>
                    <h1 class="display-2 text-primary text-white" data-toggle="counter-up">{{ $sum_daerah }}</h1>
                    <span class="fs-5 fw-semi-bold text-white">Peraturan Daerah</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-center">
                    <i class="fa fa-building fa-3x mt-3 text-white"></i>
                    <h1 class="display-2 text-primary text-white" data-toggle="counter-up">{{ $sum_universitas }}</h1>
                    <span class="fs-5 fw-semi-bold text-white">Peraturan Universitas</span>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h2 class="display-5 text-center mt-5">Berita Hukum</h2>
    <p class="fw-medium text-uppercase text-primary text-center">Berita Hukum Terkini Universitas Brawijaya</p>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                    <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" />
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html"> Bootstrap 3 Carousel FadeIn Out Effect
                            </a>
                        </h4>
                        <p class="">
                            Material Design is a visual programming language made by Google. Language programming...
                        </p>
                    </div>
                    <div class="card-read-more">
                        <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html" class="btn btn-link btn-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                    <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            <a href="http://www.fostrap.com/2016/02/awesome-material-design-responsive-menu.html"> Material Design Responsive Menu
                            </a>
                        </h4>
                        <p class="">
                            Material Design is a visual programming language made by Google. Language programming...
                        </p>
                    </div>
                    <div class="card-read-more">
                        <a href="https://codepen.io/wisnust10/full/ZWERZK/" class="btn btn-link btn-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="card">
                    <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                    <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">5  Button Hover Animation Effects
                            </a>
                        </h4>
                        <p class="">
                            Material Design is a visual programming language made by Google. Language programming...
                        </p>
                    </div>
                    <div class="card-read-more">
                        <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html" class="btn btn-link btn-block">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Tim Kami</p>
            <h1 class="display-5 mb-5">Divisi Hukum Universitas Brawijaya</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <img class="img-fluid" src="{{ asset('template_user/img/Haru-Permadi.jpeg') }}" alt="">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                            <i class="fa fa-2x fa-share text-white"></i>
                        </div>
                        <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                            style="height: 90px;">
                            <h5>Haru Permadi, S.H., M.H</h5>
                            <span class="text-primary">Kepala Divisi Hukum</span>
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <img class="img-fluid" src="{{ asset('template_user/img/faizin-sulistio.jpeg') }}" alt="">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                            <i class="fa fa-2x fa-share text-white"></i>
                        </div>
                        <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                            style="height: 90px;">
                            <h5>Dr. Faizin Sulistio, S.H., LLM</h5>
                            <span class="text-primary">Kepala Subdivisi Regulasi</span>
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <img class="img-fluid" src="{{ asset('template_user/img/fines-fatimah.jpeg') }}" alt="">
                    <div class="d-flex">
                        <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                            <i class="fa fa-2x fa-share text-white"></i>
                        </div>
                        <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                            style="height: 90px;">
                            <h5>Fines Fatimah S.H., M.H.</h5>
                            <span class="text-primary">Kepala Subdivisi Layanan Hukum</span>
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

