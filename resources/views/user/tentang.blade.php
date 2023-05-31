@extends('user.layouts.base')
@section('title', 'Tentang Kami')
@section('content')

<div class="container-fluid page-header py-5 mb-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Tentang Kami</h1>
    </div>
</div>
<div class="col-md-12 text-center">
    <img class="w-50 pt-5 text-center" style="object-fit: cover;" src="{{ asset('template_user/img/ub_hero.jpg') }}" alt="Image">  
</div> 
    <div class="m-5 col-sm-12">
    Berdasarkan <b>Peraturan Rektor Universitas Brawijaya Nomor 12 Tahun 2023 </b>  tentang Organisasi dan Tata Kerja Unsur <br> yang Berada di Bawah Rektor, Divisi Hukum berada di bawah Sekretaris Universitas.
    <br>
    Divisi Hukum terdiri atas: <br> <br>
        <div class="btn btn-primary mx-2">1. Subdivisi Regulasi</div>
        <div class="btn btn-primary mx-2">2. Subdivisi Layanan Hukum</div>
        <div class="btn btn-primary mx-2">3. Subdivisi Majelis Wali Amanat dan Senat Akademik Universitas</div>

        <br> <br>
    <h2 class="display-5">Fungsi Divisi Hukum</h2>
    1. Pelaksanaan pembentukan peraturan dan keputusan Rektor; <br>
    2. Penyelenggara pembentukan instruksi, surat perintah, dan surat edaran yang dikeluarkan oleh Rektor; <br>
    3. Pelayanan penyusunan pendapat hukum atas permintaan UB;<br>
    4. Pelayanan penyusunan dokumen hukum atas permintaan UB, Sivitas Akademika, dan Tenaga Kependidikan; <br>
    5. Pendampingan hukum kepada UB, Sivitas Akademika, dan Tenaga Kependidikan; <br>
    6. Pelaksanaan urusan administrasi MWA dan SAU; dan <br>
    7. Pelaksanaan kerja sama dengan pihak di luar UB terkait. <br>
    <br>
    <h2 class="display-5">Tugas Divisi Hukum</h2>
    1. Melakukan penyusunan peraturan dan keputusan Rektor; <br>
    2. Melakukan penyusunan instruksi, surat perintah, dan surat edaran yang dikeluarkan oleh Rektor;<br>
    3. Memberikan pendapat hukum atas permintaan UB;<br>
    4. Menyusun dokumen hukum atas permintaan UB, Sivitas Akademika, dan Tenaga Kependidikan;<br>
    5. Memberikan pendampingan hukum kepada UB, Sivitas Akademika, dan Tenaga Kependidikan; <br>
    6. Melaksanakan urusan administrasi MWA dan SAU; dan <br>
    7. Menjalin kerja sama dengan pihak di luar UB terkait dengan layanan hukum. <br>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Tim Kami</p>
                <h1 class="display-5 mb-5">Divisi Hukum Universitas Brawijaya</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{ asset('template_user/img/Haru-Permadi.jpeg') }}" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Haru Permadi, S.H., M.H</h5>
                                <span class="text-primary">Kepala Divisi Hukum</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{ asset('template_user/img/faizin-sulistio.jpeg') }}" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Dr. Faizin Sulistio, S.H., LLM</h5>
                                <span class="text-primary">Kepala Subdivisi Regulasi</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{ asset('template_user/img/fines-fatimah.jpeg') }}" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Fines Fatimah S.H., M.H.</h5>
                                <span class="text-primary">Kepala Subdivisi Layanan Hukum</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
