@extends('user.layouts.base')
@section('title', 'Berita Hukum')
@section('content')

<div class="container-fluid page-header py-5 mb-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Berita Hukum</h1>
    </div>
</div>
<div class="container">
    <div class="row col-sm-12 m-5">
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
    </div>
</div>

@endsection