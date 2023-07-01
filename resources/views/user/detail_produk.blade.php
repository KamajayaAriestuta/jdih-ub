@extends('user.layouts.base')
@section('title', $detail->perihal)
@section('content')

<div class="container-fluid px-0 mb-0">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <img class="img-fluid w-100" src="{{ asset('template_user/img/detail.jpeg') }}" alt="Image">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-start">
                            <h1 class="display-1 text-white text-center animated slideInRight"> {{ $detail->kategori->nama_kategori}} </h1>
                            <p class="fw-medium text-uppercase text-primary text-center mb-2">{{ $detail->kategori->nama_kategori}} No {{ $detail->nomor}} Tahun {{ $detail->tahun}} Tentang {{ $detail->perihal}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid">

  <div class="container">
  <h5 class="judul-detail">Detail Dokumen</h5>
  <div class="card">
    <div class="card-content">
      <div class="container">
          <div class="row gy-5 gx-4 wow fadeInUp" data-wow-delay="0.1s">
              <table class="table">
                  <tbody>
                    <tr class="something">
                      <td class="col-md-3">Perihal</td>
                      <td class="col-md-9">: {{ $detail->perihal }}</td>
                    </tr>
                      <td>Kategori</td>
                      <td>: <a href="{{ route('jenis_produk', $detail->kategori->id) }}">{{ $detail->kategori->nama_kategori}}</a></td>
                    </tr>
                    <tr>
                      <td scope="row">Nomor</td>
                      <td>: {{ $detail->nomor }}</td>
                    </tr>
                    <tr>
                      <td scope="row">Tahun</td>
                      <td>: {{ $detail->tahun }}</td>
                    </tr>
                    <tr>
                      <td scope="row">Tanggal Ditetapkan</td>
                      <td>: {{ $detail->tanggal_ditetapkan }} / {{ $detail->tanggal_diundangkan }}</td>
                    </tr>
                    <tr>
                      <td scope="row">Kaitan</td>
                      <td>: {{ $detail->kaitan }}</td>
                    </tr>
                    <tr>
                      <td scope="row">Status</td>
                      @if($detail->status->nama_status === 'Berlaku')
                        <td>: <a href="{{ route('status_produk', $detail->status->id) }}" class="bg-success text-white mx-1 px-2">Berlaku</a></td>
                      @endif
                      @if($detail->status->nama_status === 'Tidak Berlaku')
                        <td>: <a href="{{ route('status_produk', $detail->status->id) }}" class="bg-danger text-white mx-1 px-2">Tidak Berlaku</a></td>
                      @endif
                    </tr>
                    <tr>
                      <td scope="row">Unit Kerja</td>
                      <td>: <a href="{{ route('unit_kerja', $detail->unit_kerja->id) }}">{{ $detail->unit_kerja->name }}</a></td>
                    </tr>
                  </tbody>
                </table>
                <div class="my-1 px-1">
                  {{-- <a href="{{ asset('storage/file/'. $detail->file_upload)}}" class="text-secondary text-black file_detail"><b>Lihat File </b><i class="fa fa-file"></i></a>   --}}
                  <i class="fa fa-file m-2"><a href="{{ asset('storage/file/'. $detail->file_upload)}}" target="_blank"> Lihat File</a> </i>        
                  <i class="fa fa-download m-2"><a href="{{ asset('storage/file/'. $detail->file_upload)}}" download="{{ asset('storage/file/'. $detail->file_upload)}}"> Download</a> </i>        
                </div>
          </div>
    </div>
</div>
</div>
</div>
</div>



</div>

@endsection