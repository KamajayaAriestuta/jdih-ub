@extends('user.layouts.base')
@section('title', $judul->nama_kategori)
@section('content')

<div class="container-fluid px-0 mb-0">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <img class="img-fluid w-80" src="{{ asset('template_user/img/law.jpeg') }}" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-start">
                            <h1 class="display-1 text-white text-center mb-5 animated slideInRight">{{ $judul->nama_kategori }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($data as $data_jenis)
    <div class="row g-1">
        
        <div class="col-sm wow fadeIn service-item m-2" data-wow-delay="0.1s">
            <div class="p-2 d-inline">
                <div class="col-lg-10 col-md-10 px-4">
                    <p>{{ $data_jenis->kategori->nama_kategori }} | <a class="fw-semi-bold" href="#">Nomor {{ $data_jenis->nomor }}  Tahun {{ $data_jenis->tahun }}  </a></p>
                    <a href="{{ route('detail_produk', $data_jenis->id) }}"><h4 class="ml-2 d-inline"> {{ $data_jenis->perihal }}
                    </h4></a>
                </div>
                <nav class="navbar navbar-expand-lg py-0 pe-5">
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                    @if ( $data_jenis->status->nama_status === 'Berlaku' )
                    <a href="" class="bg-success text-white px-3 my-2 mx-4"> <i class="fa fa-check-square my-2"></i> Berlaku</a>
                    @endif

                    @if ( $data_jenis->status->nama_status === 'Tidak Berlaku' )
                    <a href="" class="bg-danger text-white px-3 my-2 mx-4"> <i class="fa fa-check-square my-2"></i> Tidak Berlaku</a>
                    @endif
                        <div class="navbar-nav ms-auto p-4 p-lg-0">
                            <i class="fa fa-file m-2"><a href="{{ asset('storage/file/'. $data_jenis->file_upload)}}" download="{{ asset('storage/file/'. $data_jenis->file_upload)}}"> Download</a> </i> 
                        </div>
                    </div>
                </nav>
                <hr>
            </div>
        </div>

        

    </div>
    @endforeach
</div>

@endsection