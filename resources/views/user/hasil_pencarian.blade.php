@extends('user.cari_produk')
@section('hasil_pencarian')

 <div class="container-fluid">
    <h2 class="display-5 text-center">Hasil Pencarian</h2>
    <p class="fw-medium text-uppercase text-primary text-center mb-5">Lihat Pencarian</p>
        <div class="row g-1">
            <div class="col-sm wow fadeIn service-item m-2" data-wow-delay="0.1s">
                @foreach ($result as $data)
                <div class="p-2 d-inline">
                    <div class="col-lg-10 col-md-10 px-4">
                        <p>{{ $data->kategori->nama_kategori }} | <a class="fw-semi-bold" href="#">Nomor {{ $data->nomor }} Tahun {{ $data->tahun }}</a></p>
                        <a href=""><h4 class="ml-2 d-inline">{{ $data->perihal }}  
                        </h4></a>
                    </div>
                    <nav class="navbar navbar-expand-lg py-0 pe-5">
                        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">

                          @if ( $data->status->nama_status === 'Berlaku' )
                          <a href="" class="bg-success text-white px-3 my-2 mx-4"> <i class="fa fa-check-square my-2"></i> Berlaku</a>
                          @endif

                          @if ( $data->status->nama_status === 'Tidak Berlaku' )
                          <a href="" class="bg-danger text-white px-3 my-2 mx-4"> <i class="fa fa-check-square my-2"></i> Tidak Berlaku</a>
                          @endif
   
                            <div class="navbar-nav ms-auto p-4 p-lg-0">
                                
                                <i class="fa fa-download m-2"><a href=""> 102</a> </i>
                                <i class="fa fa-eye m-2"><a href=""> 1099</a> </i>
                                <i class="fa fa-file m-2"><a href="{{ asset('storage/file/'. $data->file_upload) }}"> download</a> </i> 
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

{{-- @if( {{ $data->status->nama_status == 'Berlaku' }} ){
    <a href="" class="bg-success text-white px-3"> <i class="fa fa-check-square my-2"></i>Berlaku</a>
    }<a href="" class="bg-danger text-white px-3"> <i class="fa fa-check-square my-2"></i>Tidak Berlaku</a>
    @endif --}}