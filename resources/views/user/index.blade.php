@extends('user.layouts.base')

@section('content')
<!-- Carousel Start -->
<div class="container-fluid px-0 mb-0">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid w-100" src="{{ asset('template_user/img/homepage.png') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-start">
                                <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">Universitas Brawijaya Present</p>
                                <h1 class="display-1 text-white mb-5 animated slideInRight">Dokumentasi Informasi hukum
                                    
                                </h1>
                                <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100" src="{{ asset('template_user/img/home-page2.jpeg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-start">
                                <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">Produk Hukum Universitas Brawijaya ada Disini</p>
                                <h1 class="display-1 text-white mb-5 animated slideInRight">Explore Berbagai Produk Hukum</h1>
                                <a href="{{ route('cari_produk')}}" class="btn btn-primary py-3 px-5 animated slideInRight">Cari Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
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

<div class="container-fluid facts my-0 p-5 mb-5">
    <h2 class="display-5 text-white text-center mb-2">Cari Peraturan</h2>
    <p class="fw-medium text-uppercase text-primary text-center mb-5">Cari peraturan disini</p>
    <form enctype="multipart/form-data" method="get" action="{{ route('hasil_pencarian') }}">
        @csrf
        <div class="row g-3">
             <div class="col-md-12">
                    <input type="search" class="form-control py-2 py-3" placeholder="Kata Kunci Produk" id="perihal" name="perihal" >
            </div>
            
           <div class="col-md-2 ">
                <label for="jenis" class="py-1 text-white">Jenis</label>
                    <select class="form-control py-2 py-2" name="jenis" id="jenis">
                    <option selected></option>
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}" {{ old('kategori_id') == $item->id ? 'selected' : null }}> {{ $item->nama_kategori }} </option>
                    @endforeach
                    </select> 
            </div>

            <div class="col-md-2 ">
                <label for="nomor" class="py-1 text-white">Nomor</label>
                <input type="search" class="form-control py-2" id="nomor" name="nomor">
            </div>

            <div class="col-md-2 ">
                <label for="tahun" class="py-1 text-white">Tahun</label>
                <select class="form-control py-2" name="tahun" id="tahun">
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
            <div class="col-md-2 ">
                <label for="unit_kerja" class="py-1 text-white">Instansi</label>
                <select class="form-control py-2" name="unit_kerja" id="unit_kerja">
                    <option selected></option>  
                    @foreach ($unit_kerja as $data_unit_kerja)
                        <option value="{{ $data_unit_kerja->id }}" {{ old('unit_kerja') == $data_unit_kerja->id ? 'selected' : null }}> {{ $data_unit_kerja->name }} </option>
                    @endforeach
                </select> 
            </div>
            <div class="col-md-2 ">
                <label for="status" class="py-1 text-white">Status</label>
                    <select class="form-control py-2" name="status" id="status">
                    <option selected></option>  
                    @foreach ($status as $data_status)
                        <option value="{{ $data_status->id }}" {{ old('status') == $data_status->id ? 'selected' : null }}> {{ $data_status->nama_status }} </option>
                    @endforeach
                    </select>           
            </div>
            <div class="col-md-2 text-center">
                <br>
                <button class="btn btn-primary py-3 px-3" type="submit">Cari Produk <i class="bi bi-search"></i></button>
            </div>
        </div>
    </form>
</div>

@yield('content_user')

@endsection