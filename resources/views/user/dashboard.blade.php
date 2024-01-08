@extends('user.index')
@section('title', 'Peraturan UB')
@section('content_user')

<div class="row mx-3">
    <div class="col-sm-6">
        <div class="container-xl p-4 mt-5 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px">
            <div class="card-header mb-3 bg-dark text-white">PERATURAN TERBARU</div>
            <div class="mx-2">
                @foreach ($produk as $produk)
                <a href="{{ route('detail_produk', $produk->id) }}" style="color: #000">
                    {{ $produk->kategori->nama_kategori }}  <span style="color: #ef8c00">Nomor {{ $produk->nomor }} Tahun {{$produk->tahun}}</span> 
                </a>
                <p class="">
                    {{ $produk->perihal }}                        
                </p>
                <?php
                $tanggalSekarang = new DateTime();
                $tanggalDitetapkan = new DateTime($produk->tanggal_ditetapkan);
                $selisih = $tanggalSekarang->diff($tanggalDitetapkan);
                $tahun = $selisih->y;
                $bulan = $selisih->m;
                echo '<p class="text-dark">Ditetapkan: ' . $tahun . ' tahun, ' . $bulan . ' bulan Lalu |  <i class="fa fa-eye"></i> ' . $produk->counter . ' x dilihat</p>';?>
                <hr>
            @endforeach
            </div>
        </div>   
    </div>
    <div class="col-sm-6">
        <div class="container-xl p-4 mt-5 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px">
            <div class="card-header mb-3 bg-dark text-white">PERATURAN TERPOPULER</div>
            <div class="mx-2">
                @foreach ($produk_terpopuler as $produk)
                <a href="{{ route('detail_produk', $produk->id) }}" style="color: #000">
                    {{ $produk->kategori->nama_kategori }}  <span style="color: #ef8c00">Nomor {{ $produk->nomor }} Tahun {{$produk->tahun}}</span> 
                </a>
                <p class="">
                    {{ $produk->perihal }}                        
                </p>
                <?php
                $tanggalSekarang = new DateTime();
                $tanggalDitetapkan = new DateTime($produk->tanggal_ditetapkan);
                $selisih = $tanggalSekarang->diff($tanggalDitetapkan);
                $tahun = $selisih->y;
                $bulan = $selisih->m;
                echo '<p class="text-dark">Ditetapkan: ' . $tahun . ' tahun, ' . $bulan . ' bulan Lalu |  <i class="fa fa-eye"></i> ' . $produk->counter . ' x dilihat</p>';
                ?>
                <hr>
            @endforeach
            </div>
        </div>   
    </div>
</div>
<div class="row mx-12">
    <div class="col-sm-12">
        <div class="m-4 p-4 mt-5 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px">
            <div class="card-header mb-3 bg-dark text-white">SUBJEK PERATURAN</div>
            <div class="row">
                <div class="col-sm-2 px-5 my-3">
                    <a href="{{ route('subjek', ['subjek' => 'Tata Naskah Dinas']) }}">
                        <div class="alert alert-secondary" role="alert">
                            <i class="icon fa fa-file center"></i>
                        </div>
                        <p class= "text-center d-flex justify-content-center align-items-center">Tata Naskah Dinas</p>
                    </a>
                </div>
                <div class="col-sm-2 px-5 my-3">
                    <a href="{{ route('subjek', ['subjek' => 'Badan Pengelola Usaha']) }}">
                        <div class="alert alert-secondary" role="alert">
                            <i class="icon fa fa-building center"></i>
                        </div>
                        <p class= "text-center d-flex justify-content-center align-items-center">Badan Pengelola Usaha</p>
                    </a>
                </div>
                <div class="col-sm-2 px-5 my-3">
                    <a href="{{ route('subjek', ['subjek' => 'Akademik']) }}">
                        <div class="alert alert-secondary" role="alert">
                            <i class="icon fa fa-graduation-cap center"></i>
                        </div>
                        <p class= "text-center d-flex justify-content-center align-items-center">Akademik</p>
                    </a>
                </div>
                <div class="col-sm-2 px-5 my-3">
                    <a href="{{ route('subjek', ['subjek' => 'Mahasiswa']) }}">
                        <div class="alert alert-secondary" role="alert">
                            <i class="icon fa fa-child center"></i>
                        </div>
                        <p class= "text-center d-flex justify-content-center align-items-center">Mahasiswa</p>
                    </a>
                </div>
                <div class="col-sm-2 px-5 my-3">
                    <a href="{{ route('subjek', ['subjek' => 'Dosen']) }}">
                        <div class="alert alert-secondary" role="alert">
                            <i class="icon fa fa-id-badge center"></i>
                        </div>
                        <p class= "text-center d-flex justify-content-center align-items-center">Dosen</p>
                    </a>

                </div>
                <div class="col-sm-2 px-5 my-3">
                    <a href="{{ route('subjek', ['subjek' => 'Organisasi']) }}">
                        <div class="alert alert-secondary" role="alert">
                            <i class="icon fa fa-users center"></i>
                        </div>
                        <p class= "text-center d-flex justify-content-center align-items-center">Organisasi</p>
                    </a>
                </div>
            </div>
        </div>   
    </div>
</div>

<div class="row mx-3">
    <div class="col-sm-3">
        <div class="container-xl p-4 mt-5 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px">
            <h5 class="mt-2 text-center" style="color: #000">SURVEI KEPUASAN <span style="color: #5c5c5c">MASYARAKAT</span></h5>
            <p class="text-center text-danger mb-3">Mari menilai layanan Divisi Hukum Universitas Brawijaya</p>
            <div class="row d-flex justify-content-center align-items-center">
                <img src="{{ asset('template_user/img/barcode.png')}}" width="100%" alt="">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSc2-rcxWHfIC1kLJlBRnjYXjN2HAMFKx6n_msDppgR7svULzw/viewform"></a>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSc2-rcxWHfIC1kLJlBRnjYXjN2HAMFKx6n_msDppgR7svULzw/viewform"><h5 class="py-3 text-center" style="color: #000; background: #ef8c00">Survei SKM UB</h5></a>

            </div>
        </div>
    </div>
    <div class="col-sm-9">
        <div class="container-xl p-4 mt-5 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px">
            <div class="card-header mb-3 bg-dark text-white">BERITA TERKINI</div>
            <div class="row">
                @foreach ($berita as $data_berita)
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

</div>

</div>
@endsection

