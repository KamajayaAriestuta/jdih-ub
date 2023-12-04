@extends('user.layouts.base')
@section('title', $judul->nama_kategori)
@section('content')

<div class="container-fluid px-0 mb-0">
    <div class="container-fluid page-header py-5 mb-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">{{ $judul->nama_kategori }}</h1>
        </div>
    </div>
    <div class="container-xl mt-5">
        <div class="row">
            <div class="col-sm-4 col-12" data-wow-delay="0.1s">
                <div class="mb-4 bg-white p-4" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
                    <h4 class="" style="color: #4a4a4a;">Tahun 2023-2019</h4>
                    <hr>
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2023') }}"><p style="font-size: 15px">Peraturan Tahun 2023 <span class="bg-dark text-white p-1">{{ $per2023 }}</span></p></a>
                    </div>
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2022') }}"><p style="font-size: 15px">Peraturan Tahun 2022 <span class="bg-dark text-white p-1">{{ $per2022 }}</span></p></a>
                    </div>
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2021') }}"><p style="font-size: 15px">Peraturan Tahun 2021 <span class="bg-dark text-white p-1">{{ $per2021 }}</span></p></a>
                    </div>
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2020') }}"><p style="font-size: 15px">Peraturan Tahun 2020 <span class="bg-dark text-white p-1">{{ $per2020 }}</span></p></a>
                    </div>
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2019') }}"><p style="font-size: 15px">Peraturan Tahun 2019 <span class="bg-dark text-white p-1">{{ $per2019 }}</span></p></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12" data-wow-delay="0.1s">
                <div class="mb-4 bg-white p-4" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
                    <h4 class="" style="color: #4a4a4a;">Tahun 2018-2014</h4>
                    <hr>
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2018') }}"><p style="font-size: 15px">Peraturan Tahun 2018 <span class="bg-dark text-white p-1">{{ $per2018 }}</span></p></a>
                    </div>
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2017') }}"><p style="font-size: 15px">Peraturan Tahun 2017 <span class="bg-dark text-white p-1">{{ $per2017 }}</span></p></a>
                    </div>
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2016') }}"><p style="font-size: 15px">Peraturan Tahun 2016 <span class="bg-dark text-white p-1">{{ $per2016 }}</span></p></a>
                    </div>
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2015') }}"><p style="font-size: 15px">Peraturan Tahun 2015 <span class="bg-dark text-white p-1">{{ $per2015 }}</span></p></a>
                    </div>
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2014') }}"><p style="font-size: 15px">Peraturan Tahun 2014 <span class="bg-dark text-white p-1">{{ $per2014 }}</span></p></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-12 " data-wow-delay="0.1s">
                <div class="mb-4 bg-white p-4" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
                    <h4 class="" style="color: #4a4a4a;">Tahun 2015-2011</h4>
                    <hr>
    
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2013') }}"><p style="font-size: 15px">Peraturan Tahun 2013 <span class="bg-dark text-white p-1">{{ $per2013 }}</span></p></a>
                    </div>
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2012') }}"><p style="font-size: 15px">Peraturan Tahun 2012 <span class="bg-dark text-white p-1">{{ $per2012 }}</span></p></a>
                    </div>
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2011') }}"><p style="font-size: 15px">Peraturan Tahun 2011 <span class="bg-dark text-white p-1">{{ $per2011 }}</span></p></a>
                    </div>
                    <div class="col-md-12 col-12">
                        <a href="{{ route('per2010') }}"><p style="font-size: 15px">Peraturan Tahun 2010 <span class="bg-dark text-white p-1">{{ $per2010 }}</span></p></a>
                    </div>
                    <div class="col-md-12 col-12">
                        <a href="#"><p style="font-size: 15px" class="text-danger">Peraturan Tahun 2009 <span class="bg-dark text-white p-1">{{ $per2009 }}</span></p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl mt-4">
        <div class="row">
            <div class="col-sm-12" data-wow-delay="0.1s">
                <div class="mb-4 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
                    @foreach ($data as $data_jenis)
                    <div class="p-2 d-inline">
                        <div class="col-lg-10 col-md-10 px-4">
                            <p>{{ $data_jenis->kategori->nama_kategori }} | <a class="text-danger" href="#">Nomor {{ $data_jenis->nomor }} Tahun {{ $data_jenis->tahun }}</a></p>
                            <a href="{{ route('detail_produk', $data_jenis->id) }}"><h5 class="ml-2 d-inline" style="color: #000">{{ $data_jenis->perihal }} </h5></a>
                            <p class="text-danger mt-1">Status: <span style="color: #5c5c5c">{{ $data_jenis->status }}</span></p>
                        </div>
                        <nav class="navbar navbar-expand-lg py-0 pe-5">
                            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="ms-auto inline d-flex" style="margin-bottom: -5px">
                                    <a href="{{ asset('storage/file/'. $data_jenis->file_upload)}}" class="text-primary d-flex align-items-center text-decoration-none small" target="_blank" style="margin-right: 10px;"><i class="fa fa-eye m-1"></i> View </a>                                
                                    <a href="{{ asset('storage/file/'. $data_jenis->file_upload)}}" download="{{ asset('storage/file/'. $data_jenis->file_upload)}}" class="text-primary d-flex align-items-center text-decoration-none small"> <i class="fa fa-file m-1"></i> Download </a>
                                </div>
                            </div>
                        </nav>
                        <hr>
                    </div>
                    @endforeach
                </div>
                {{ $data_pagination->links('vendor.pagination') }}
            </div>
        </div>
    </div>
</div>

@endsection