@extends('user.layouts.base')
@section('title', $berita->judul)
@section('content')

<div class="container-fluid page-header py-5 mb-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h2 class="text-white animated slideInRight">{{ $berita->judul }}</h2>
    </div>
</div>

<div class="container-fluid px-0 mb-0">
    <div class="container-fluid card-back-berita col-sm-8 mt-5 mb-5">
        <div class="row">
            <div class="card-content-berita col-sm-12 justified">
                <div class="col-md-12">
                    <img width="100%" class="text-center mb-4" style="object-fit: cover;" src="{{ asset('storage/file/'. $berita->file_upload)}}" alt="Image">  
                </div> 
                {!! html_entity_decode($berita->text, ENT_QUOTES, 'UTF-8') !!} 
            </div>
            <hr>
            <div class="row px-5 pb-4">
                <h5 class="my-3" style="color: #000">BERITA <span style="color: #5c5c5c">TERKAIT</span></h5>
                @foreach ($detail_berita as $data_berita)
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('detail_berita', $data_berita->id) }}">
                            <img src="{{ asset('storage/file/'. $data_berita->file_upload)}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
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
                    </div> 
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection