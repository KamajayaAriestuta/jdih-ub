@extends('user.index')
@section('title', 'Dashboard')
@section('content_user')
<div class="container-xl pt-2">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="text-primary mt-2">News</p>
            <h1 class="display-5 mb-4">Produk Hukum Terbaru</h1>
        </div>
        <div class="row gy-5 gx-4">
            @foreach ($produk_terbaru as $produk)
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <img class="img-fluid" src="{{ asset('template_user/img/produkhukum.jpeg') }}" alt="">
                    <div class="service-img">
                        <img class="img-fluid" src="{{ asset('template_user/img/file.png') }}" alt="">
                    </div>
                    <div class="service-detail">
                        <div class="service-title">
                            <hr class="w-25">
                            <h3 class="mb-0">{{ $produk->kategori->nama_kategori }} No {{ $produk->nomor }}
                            Tahun {{ $produk->tahun }}
                            </h3>
                            <hr class="w-25">
                        </div>
                        <div class="service-text">
                            <p class="text-white mb-0">{{ $produk->perihal }}</p>
                        </div>
                    </div>
                    <a class="btn btn-light" href="">Read More</a>
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
@endsection