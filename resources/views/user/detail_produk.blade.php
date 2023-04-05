@extends('user.layouts.base')
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
    
<div class="container-l py-5 bg-white col-md-8 px-5">
  <div class="container-fluid facts my-0 py-2 mb-5">
    <h3 class="text-white">Detail Dokumen</h3>
  </div>
    <div class="container">
        <div class="row gy-5 gx-4 wow fadeInUp" data-wow-delay="0.1s">
            <table class="table">
                <tbody>
                  <tr class="something">
                    <td class="col-md-5">Perihal</td>
                    <td class="col-md-7">: {{ $detail->perihal }}</td>
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
              <div class="col-md-8 my-1 mx-1">
                <a href="{{ asset('storage/file/'. $detail->file_upload)}}" class="col-4">
                  <button class="btn btn-primary col-4">File</button>
                </a>
                <a href="" class="col-4">
                  <button class="btn btn-success col-4">Download</button>
                </a>
              </div>

        </div>
    </div>
</div>



</div>

@endsection