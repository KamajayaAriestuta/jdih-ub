@extends('user.cari_produk')
@section('hasil_pencarian')

 <div class="container-fluid">
    <h2 class="display-5 text-center">Hasil Pencarian</h2>
    <p class="fw-medium text-uppercase text-primary text-center mb-5">Lihat Pencarian</p>
        <div class="row g-5">
            <div class="col-sm wow fadeIn service-item m-2" data-wow-delay="0.1s">
                @foreach ($result as $data)
                <div class="p-2 d-inline">
                    <div class="col-lg-6 col-md-6">
                        <p>{{ $data->kategori->nama_kategori }} | <a class="fw-semi-bold" href="#">Nomor {{ $data->nomor }} Tahun {{ $data->tahun }}</a></p>
                        <h4 class="ml-2 d-inline">{{ $data->perihal }} </h4>
                    </div>
                    <nav class="navbar navbar-expand-lg py-0 pe-5">
                        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav ms-auto p-4 p-lg-0">
                                <i class="fa fa-download m-2"><a href=""> 102</a> </i>
                                <i class="fa fa-eye m-2"><a href=""> 1099</a> </i>
                                <i class="fa fa-file m-2"><a href=""> download</a> </i> 
                            </div>
                        </div>
                    </nav>
                    <hr>
                </div>
                @endforeach
            </div>
        </div>
    </div> 
@endsection