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
                                <a href="{{ route('detail_produk', $produk->id) }}">
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
        <a href="{{ route('produk') }}">
            <div class="navbar-nav ms-auto p-4 p-lg-0">    
                <h2 class="btn btn-primary text-center">Lihat Selengkapnya</h2>
            </div>
        </a>
    </div>


</div>
<div class="p-3 mt-5" style="background-image: url('template_user/img/lawimage.png'); height: 50vh">           
    <h5 class="fw-medium text-uppercase text-center mb-4 mt-4 text-white z-2">Jumlah Keseluruhan Produk Hukum DIH UB</h5>
        <div class="row col-sm-12">
            <div class="col-sm-4">
                <div class="text-center">
                    <i class="fa fa-building fa-3x mt-3 text-white"></i>
                    <h1 class="display-2 text-primary text-white" data-toggle="counter-up">{{ $sum_nasional }}</h1>
                    <span class="fs-5 fw-semi-bold text-white">Produk Nasional</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-center">
                    <i class="fa fa-building fa-3x mt-3 text-white"></i>
                    <h1 class="display-2 text-primary text-white" data-toggle="counter-up">{{ $sum_daerah }}</h1>
                    <span class="fs-5 fw-semi-bold text-white">Produk Daerah</span>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="text-center">
                    <i class="fa fa-building fa-3x mt-3 text-white"></i>
                    <h1 class="display-2 text-primary text-white" data-toggle="counter-up">{{ $sum_universitas }}</h1>
                    <span class="fs-5 fw-semi-bold text-white">Produk Universitas</span>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h2 class="display-5 text-center mt-5">Berita Hukum</h2>
    <p class="fw-medium text-uppercase text-primary text-center">Berita Hukum Terkini Universitas Brawijaya</p>
    <div class="container">
        <div class="row col-sm-12">
            @foreach ($berita as $data_berita)
            <div class="col-sm-4">
                <div class="card-berita" style="min-height: 30px">
                    <a class="img-card" href="{{ route('detail_berita', $data_berita->id) }}">
                        <img src="{{ asset('storage/file/'. $data_berita->file_upload)}}" 
                        width="100" height="100" alt="" style="object-fit: cover">
                    </a>
                    <div class="card-content">
                        <h4 class="card-title">
                            <a href="{{ route('detail_berita', $data_berita->id) }}">
                                {{ $data_berita->judul }}
                            </a>
                        </h4>
                        <p class="">@php $text_berita= \Illuminate\Support\Str::limit($data_berita->text, 100, '...')@endphp
                            {!! html_entity_decode($text_berita, ENT_QUOTES, 'UTF-8') !!}
                        </p>
                    </div>
                    <div class="card-read-more">
                        <a href="{{ route('detail_berita', $data_berita->id) }}" class="btn btn-link btn-block">
                            Baca Lebih Banyak
                        </a>
                    </div>
                </div> 
            </div>
            @endforeach
            <a href="{{ route('semua_berita') }}">
                <div class="navbar-nav ms-auto p-4 p-lg-0">    
                    <h2 class="btn btn-primary text-center">Lihat Selengkapnya</h2>
                </div>
            </a>
        </div>
    </div>
</div>



@endsection

