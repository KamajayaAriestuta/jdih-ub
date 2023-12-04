@extends('user.layouts.base')
@section('title', 'Dashboard')
@section('content')
<div class="my-0 px-0 mb-0" style="z-index: 1">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" style="z-index: 1">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid w-100" src="{{ asset('template_user/img/background-awal.png') }}" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100" src="{{ asset('template_user/img/background-depan-3.png') }}" alt="Image">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="row mx-3" style="margin-top: -100px;">
    <div class="col-sm-8" style="z-index: 2">
        <div class="container-xl p-5 mt-5 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px">
            <div class="text-center bg-black text-bold">FORMULIR CARI PERATURAN</div>
            <form enctype="multipart/form-data" method="get" action="{{ route('hasil_pencarian') }}">
                @csrf
                    <div class="row">
                        <input type="search" class="py-3 mb-3 col-md-12" placeholder="Kata Kunci Produk" id="perihal" name="perihal" style="border-radius: 5px;" >
                        <button class="btn btn-dark col-md-3 mb-2" style="margin-right: 5px"; type="submit">Cari Produk <i class="bi bi-search"></i></button>
                        <button id="tambahFilterButton" class="btn btn-dark mb-2 col-md-3" type="button">Tambah Filter <i class="bi bi-caret-right-square-fill"></i></button>
                    </div>
                    <div class="row py-1" style="background: white; border-radius: 10px; display:none;" id="formFilter">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="jenis" class="py-1">Jenis</label>
                                <select class="form-control py-2" name="jenis" id="jenis" style="border-radius: 10px">
                                <option selected ></option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}" {{ old('kategori_id') == $item->id ? 'selected' : null }} > {{ $item->nama_kategori }} </option>
                                @endforeach
                                </select> 
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-sm-6">
                                <label for="nomor" class="py-1">Nomor</label>
                                <input type="search" class="form-control py-2" id="nomor" name="nomor" style="border-radius: 10px">    
                            </div>                          
                            <div class="col-sm-6">
                                <label for="tahun" class="py-1">Tahun</label>
                                <select class="form-control py-2" name="tahun" id="tahun" style="border-radius: 10px">
                                <option selected></option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                            </select>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <div class="col-sm-4" style="z-index: 2">
        <div class="container-xl p-4 mt-5 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
            <div class="card-header mb-3 bg-black text-bold">KLASIFIKASI TAHUN</div>
            <a href="{{ route('per2023') }}" class="btn btn-primary col-md-3 mb-2" style="margin-right: 5px; border-radius: 15px" type="submit">2023</a>
            <a href="{{ route('per2022') }}" class="btn btn-primary col-md-3 mb-2" style="margin-right: 5px; border-radius: 15px" type="submit">2022</a>
            <a href="{{ route('per2021') }}" class="btn btn-primary col-md-3 mb-2" style="margin-right: 5px; border-radius: 15px" type="submit">2021</a>
            <a href="{{ route('per2020') }}"  class="btn btn-primary col-md-3 mb-2" style="margin-right: 5px; border-radius: 15px" type="submit">2020</a>
            <a href="{{ route('per2019') }}" class="btn btn-primary col-md-3 mb-2" style="margin-right: 5px; border-radius: 15px" type="submit">2019</a>
            <a href="{{ route('hasil_pencarian') }}" class="btn btn-secondary col-md-3 mb-2" style="margin-right: 5px; border-radius: 15px" type="submit">Lainnya</a>
            <div class="card-header mb-3 mt-3 text-bold">KLASIFIKASI JENIS</div>
            <a href="jenis_produk/1" class="mx-2 col-md-12 mb-2" style="margin-right: 5px; color: rgb(36, 36, 36);" type="submit"><i class="bi bi-file-earmark mx-1"></i>Peraturan Rektor</a>
            <a href="jenis_produk/2" class="mx-2 col-md-12 mb-2" style="margin-right: 5px; color: rgb(36, 36, 36);" type="submit"><i class="bi bi-file-earmark mx-1"></i>Peraturan Majelis Wali Amanat</a>
            <a href="jenis_produk/3" class="mx-2 col-md-12 mb-2" style="margin-right: 5px; color: rgb(36, 36, 36);" type="submit"><i class="bi bi-file-earmark mx-1"></i>Peraturan Senat Akademik Universitas</a>
        </div>
    </div>
</div>


@yield('content_user')

@endsection

