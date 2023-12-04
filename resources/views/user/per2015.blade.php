@extends('user.layouts.base')
@section('title', 'Peraturan 2015')
@section('content')

    <div class="container-fluid px-0 mb-0">
    <div class="container-fluid page-header py-5 mb-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Peraturan 2015</h1>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm m-2" data-wow-delay="0.1s">
                <div class="mb-4 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
                    @foreach ($produk as $produk_2015)
                    <div class="p-2 d-inline">
                        <div class="col-lg-10 col-md-10 px-4">
                            <p>{{ $produk_2015->kategori->nama_kategori }} | <a class="text-danger" href="#">Nomor {{ $produk_2015->nomor }} Tahun {{ $produk_2015->tahun }}</a></p>
                            <a href="{{ route('detail_produk', $produk_2015->id) }}"><h5 class="ml-2 d-inline" style="color: #000">{{ $produk_2015->perihal }} </h5></a>
                            <p class="text-danger">Status: <span style="color: #5c5c5c">{{ $produk_2015->status }}</span></p>
                        </div>
                        <nav class="navbar navbar-expand-lg py-0 pe-5">
                            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="ms-auto inline d-flex" style="margin-bottom: -5px">
                                    <a href="{{ asset('storage/file/'. $produk_2015->file_upload)}}" class="text-primary d-flex align-items-center text-decoration-none small" style="margin-right: 10px;"><i class="fa fa-eye m-1"></i> View </a>                                
                                    <a href="{{ asset('storage/file/'. $produk_2015->file_upload)}}" download="{{ asset('storage/file/'. $produk_2015->file_upload)}}" class="text-primary d-flex align-items-center text-decoration-none small"> <i class="fa fa-file m-1"></i> Download </a>
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