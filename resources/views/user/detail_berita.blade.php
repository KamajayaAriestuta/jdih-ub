@extends('user.layouts.base')
@section('title', $berita->judul)
@section('content')

<div class="container-fluid px-0 mb-0">
    <div class="col-md-11 mx-5 mt-4">
        <h2>{{ $berita->judul }}</h2>
    </div>
    <div class="col-md-11 text-center">
        <img class="w-50 pt-5 text-center" style="object-fit: cover;" src="{{ asset('storage/file/'. $berita->file_upload)}}" alt="Image">  
    </div> 
    <div class="container-fluid card-back-berita col-sm-11 mt-5 mb-5">
        <div class="row">
            <div class="card-content-berita col-sm-7">

                {!! html_entity_decode($berita->text, ENT_QUOTES, 'UTF-8') !!} 
            </div>
            <div class="card-content-berita col-sm-5">
                @foreach ($detail_berita as $data_berita)
                        <div class="card-detail_berita p-2">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img class="text-center"  width="100px" style="object-fit: cover;" src="{{ asset('storage/file/'. $data_berita->file_upload)}}" alt="Image">  
                                </div>
                                <div class="col-sm-1">

                                </div>
                                <div class="col-sm-8">
                                        <h5 class="card-title">
                                            <a href="">
                                               {{$data_berita->judul}}
                                            </a>
                                        </h5>
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