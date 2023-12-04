@extends('user.layouts.base')
@section('title', 'Cari Produk Hukum')
@section('content')

<div class="container-fluid facts my-0" style="padding: 30px 0px">
    {{-- <h2 class="text-white mb-2">Cari Peraturan</h2>
    <p class="fw-medium text-uppercase text-secondary mb-3">Cari peraturan disini</p> --}}
    <div class="container-xl">
        <div class="row">
    <form enctype="multipart/form-data" method="get" action="{{ route('hasil_pencarian') }}">
        @csrf
            <div class="row">
                    <input type="search" class="py-3 col-md-12 mb-3" placeholder="Kata Kunci Produk" id="perihal" name="perihal" style="border-radius: 10px;" >
                    <button class="btn btn-dark col-md-2" style="margin-right: 5px"; type="submit">Cari Produk <i class="bi bi-search"></i></button>
                    <button id="tambahFilterButton" class="btn btn-dark col-md-2" type="button">Tambah Filter <i class="bi bi-caret-right-square-fill"></i></button>
                </div>
            <div class="row" style="background: white; padding: 25px; margin-top: 15px; border-radius: 10px; display:none;" id="formFilter">
                <div class="col-md-12">
                    <label for="jenis" class="py-1">Jenis</label>
                    <select class="form-control py-2" name="jenis" id="jenis" style="border-radius: 10px">
                    <option selected ></option>
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}" {{ old('kategori_id') == $item->id ? 'selected' : null }} > {{ $item->nama_kategori }} </option>
                    @endforeach
                    </select> 
                </div>
                <div class="col-md-12">
                    <label for="nomor" class="py-1">Nomor</label>
                    <input type="search" class="form-control py-2" id="nomor" name="nomor" style="border-radius: 10px">
                </div>
                <div class="col-md-12">
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
    </form>
</div>
</div>
</div>

@yield('hasil_pencarian')

@endsection