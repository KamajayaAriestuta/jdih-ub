@extends('user.layouts.base')
@section('title', 'Peraturan Dekan')
@section('content')

<div class="container-fluid px-0 mb-0">
    <div class="container-fluid page-header py-5 mb-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Peraturan Dekan</h1>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="container-xl p-4 mt-5 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Hukum']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FH.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Hukum']) }}">
                                    Fakultas Hukum
                                </a>
                            </h4>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Ekonomi dan Bisnis']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FEB.png')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Ekonomi dan Bisnis']) }}">
                                    Fakultas Ekonomi dan Bisnis
                                </a>
                            </h4>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Ilmu Administrasi']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FIA.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Ilmu Administrasi']) }}">
                                    Fakultas Ilmu Administrasi
                                </a>
                            </h4>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Pertanian']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FP.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Pertanian']) }}">
                                    Fakultas Pertanian
                                </a>
                            </h4>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Peternakan']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FAPET.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Peternakan']) }}">
                                    Fakultas Peternakan
                                </a>
                            </h4>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Perikanan dan Ilmu Kelautan']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FPIK.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Perikanan dan Ilmu Kelautan']) }}">
                                    Fakultas Perikanan dan Ilmu Kelautan
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Teknik']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FT.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Teknik']) }}">
                                    Fakultas Teknik
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Kedokteran']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FK.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Kedokteran']) }}">
                                    Fakultas Kedokteran
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FMIPA.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam']) }}">
                                    Fakultas Matematika dan Ilmu Pengetahuan Alam
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Teknologi Pertanian']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FTP.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Teknologi Pertanian']) }}">
                                    Fakultas Teknologi Pertanian
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Ilmu Sosial dan Ilmu Politik']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FISIP.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Ilmu Sosial dan Ilmu Politik']) }}">
                                    Fakultas Ilmu Sosial dan Ilmu Politik
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Ilmu Budaya']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FIB.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Ilmu Budaya']) }}">
                                    Fakultas Ilmu Budaya
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Kedokteran Hewan']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FKH.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Kedokteran Hewan']) }}">
                                    Fakultas Kedokteran Hewan
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Kedokteran Gigi']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FKG.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Kedokteran Gigi']) }}">
                                    Fakultas Kedokteran Gigi
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Ilmu Komputer']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FILKOM.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Ilmu Komputer']) }}">
                                    Fakultas Ilmu Komputer
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Ilmu Kesehatan']) }}">
                            <img src="{{ asset('template_user/img/fakultas/FIKES.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Ilmu Kesehatan']) }}">
                                    Fakultas Ilmu Kesehatan
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-berita" style="border-radius: 5px; ">
                        <a class="img-card" href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Vokasi']) }}">
                            <img src="{{ asset('template_user/img/fakultas/VOKASI.jpeg')}}" 
                            width="100" height="10" alt="" style="object-fit: cover">
                        </a>
                        <div class="card-content">
                            <h4 class="card-title">
                                <a href="{{ route('jenis_perdek', ['penyusun' => 'Fakultas Vokasi']) }}">
                                    Fakultas Vokasi
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                
        </div>
    </div>
</div>

@endsection





