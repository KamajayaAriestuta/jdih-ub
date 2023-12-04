@extends('user.layouts.base')
@section('title', 'Tentang Kami')
@section('content')

<div class="container-fluid page-header py-5 mb-2">
    <div class="container py-5">
        <h3 class="display-3 text-white animated slideInRight">Tentang Kami</h3>
    </div>
</div>


<div class="container-xl p-1 mt-5 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
    <div class="m-5 col-sm-12">
        <p style="font-size: 15px;" class="mb-3">Berdasarkan <b>Peraturan Rektor Universitas Brawijaya Nomor 12 Tahun 2023 </b>tentang Organisasi dan Tata Kerja Unsur 
        <br> yang Berada di Bawah Rektor, Divisi Hukum berada di bawah Sekretaris Universitas. Divisi Hukum terdiri atas:</p>
        <div class="btn btn-dark">1. Subdivisi Regulasi</div>
        <div class="btn btn-dark">2. Subdivisi Layanan Hukum</div>

        <br> <br>
    <h5>Fungsi Divisi Hukum</h5>
    <p style="font-size: 15px;" class="mb-1">1. Pelaksanaan pembentukan peraturan dan keputusan Rektor;</p>
    <p style="font-size: 15px"  class="mb-1">2. Penyelenggara pembentukan instruksi, surat perintah, dan surat edaran yang dikeluarkan oleh Rektor; </p>
    <p style="font-size: 15px"  class="mb-1">3. Pelayanan penyusunan pendapat hukum atas permintaan UB;</p>
    <p style="font-size: 15px"  class="mb-1">4. Pelayanan penyusunan dokumen hukum atas permintaan UB, Sivitas Akademika, dan Tenaga Kependidikan; </p>
    <p style="font-size: 15px"  class="mb-1">5. Pendampingan hukum kepada UB, Sivitas Akademika, dan Tenaga Kependidikan; </p>
    <p style="font-size: 15px"  class="mb-1">6. Pelaksanaan urusan administrasi MWA dan SAU; dan </p>
    <p style="font-size: 15px"  class="mb-1">7. Pelaksanaan kerja sama dengan pihak di luar UB terkait. </p>
    <br>
    <h5>Tugas Divisi Hukum</h5>
    <p style="font-size: 15px;" class="mb-1">1. Melakukan penyusunan peraturan dan keputusan Rektor; </p>
    <p style="font-size: 15px;" class="mb-1">2. Melakukan penyusunan instruksi, surat perintah, dan surat edaran yang dikeluarkan oleh Rektor; </p>
    <p style="font-size: 15px;" class="mb-1">3. Memberikan pendapat hukum atas permintaan UB; </p>
    <p style="font-size: 15px;" class="mb-1">4. Menyusun dokumen hukum atas permintaan UB, Sivitas Akademika, dan Tenaga Kependidikan; </p>
    <p style="font-size: 15px;" class="mb-1">5. Memberikan pendampingan hukum kepada UB, Sivitas Akademika, dan Tenaga Kependidikan;  </p>
    <p style="font-size: 15px;" class="mb-1">6. Melaksanakan urusan administrasi MWA dan SAU; dan </p>
    <p style="font-size: 15px;" class="mb-1">7. Menjalin kerja sama dengan pihak di luar UB terkait dengan layanan hukum. </p>
    </div>
</div>
<div class="container-xl p-3 mt-5 bg-white" 
style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); 
border-radius: 5px; background-image: url('template_user/img/desain.png'); 
background-repeat: no-repeat; 
background-position: center center; 
height: 100vh;">
</div>
<div class="container-xl p-3 mt-5 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
    <div class="container-xxl p-4">
        <div class="container">
            <h4 style="color: #000">Galeri</h4>
            <p class="text-danger mb-3">Galeri kegiatan Divisi Hukum</p>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ asset('template_user/img/galeri1.jpeg') }}" data-lightbox="galeri-kegiatan">
                        <img class="" src="{{ asset('template_user/img/galeri1.jpeg') }}" width="350" height="350" style="object-fit: cover; border-radius: 5px;">
                    </a>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ asset('template_user/img/galeri2.jpeg') }}" data-lightbox="galeri-kegiatan">
                        <img class="" src="{{ asset('template_user/img/galeri2.jpeg') }}" width="350" height="350" style="object-fit: cover; border-radius: 5px;">
                    </a>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ asset('template_user/img/ub_hero.png') }}" data-lightbox="galeri-kegiatan">
                        <img class="" src="{{ asset('template_user/img/ub_hero.png') }}" width="350" height="350" style="object-fit: cover; border-radius: 5px;">
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>


@endsection


