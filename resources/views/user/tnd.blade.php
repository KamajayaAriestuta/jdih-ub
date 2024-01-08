@extends('user.layouts.base')
@section('title', 'Format Naskah Dinas')
@section('content')

<div class="container-fluid page-header py-5 mb-2">
    <div class="container py-5">
        <h3 class="display-3 text-white animated slideInRight">Format Naskah Dinas</h3>
    </div>
</div>

<div class="container-xl p-4 mt-5 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">

<p>Format naskah dinas sesuai dengan <a href="https://divisihukum.ub.ac.id/detail_produk/649">Peraturan Rektor Nomor 89 Tahun 2023 tentang Tata Naskah Dinas</a></h5>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <ul>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/perdek.doc')}}">Format Peraturan Dekan</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/lampiranperdek.doc')}}">Format Lampiran Peraturan Dekan</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/salinanperdek.doc')}}">Format Salinan Peraturan Dekan</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/keputusan.doc')}}">Format Keputusan Rektor</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/salinankeputusan.doc')}}">Format Salinan Keputusan Rektor</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/instruksi.doc')}}">Format Instruksi Rektor</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/suratperintah.doc')}}">Format Surat Perintah</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/suratedaran.doc')}}">Format Surat Edaran</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/suratdinas.doc')}}">Format Surat Dinas</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/notadinas.doc')}}">Format Nota Dinas</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/memosetengaha4.doc')}}">Format Memo 1/2 A4</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/memob6.doc')}}">Format Memo B6</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/suratundangan.doc')}}">Format Undangan Berbentuk Lembaran Surat</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/kartuundangan.doc')}}">Format Undangan Berbentuk Kartu</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/st.doc')}}">Format Surat Tugas Berbentuk Lembaran Surat</a></p></li>
            </ul>
        </div>
        <div class="col-sm-6">
            <ul>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/stkolom.doc')}}">Format Surat Tugas Berbentuk Kolom</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/suratpengantar.doc')}}">Format Surat Pengantar Berbentuk Lembaran Surat</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/suratpengantarkolom.doc')}}">Format Surat Pengantar Berbentuk Kolom</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/notakesepemahaman.doc')}}">Format Nota Kesepemahaman</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/suratperjanjian.doc')}}">Format Surat Perjanjian</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/suratkuasa.doc')}}">Format Surat Kuasa</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/suratketerangan.doc')}}">Format Surat Keterangan</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/suratpernyataan.doc')}}">Format Surat Pernyataan</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/suratpengumuman.doc')}}">Format Surat Pengumuman</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/beritaacara.doc')}}">Format Berita Acara</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/laporan.doc')}}">Format Laporan</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/notula.doc')}}">Format Notula Rapat</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/telaahstaf.doc')}}">Format Telaah Staf</a></p></li>
                <li><p><a href="{{ asset('storage/file/formatnaskahdinas/pos.doc')}}">Format Prosedur Operasional Standar</a></p></li>
            </ul>
        </div>
    </div>
</div>
<div class="row mx-3">
    <div class="col-sm-12">
        <div class="card-header mt-3 bg-dark text-white">Format Kepala Surat Universitas</div>
        <iframe src="{{ asset('storage/file/KepalaSuratUniversitas.pdf')}}"                     
                frameborder="0" class="mt-0 mx-0" style="width: 100%; height: 100vh; border:0; max-height: 200px;" 
                allowfullscreen="" aria-hidden="false" tabindex="0" frameborder="0"></iframe>
        <button onclick="universitas()" class="btn btn-primary mt-1">Download Format KOP Universitas Doc</button>
    </div>
</div>
<div class="row mx-3">
    <div class="col-sm-12">
        <div class="card-header mt-3 bg-dark text-white">Format Kepala Surat Fakultas</div>
        <iframe src="{{ asset('storage/file/KepalaSuratFakultas.pdf')}}"                     
                frameborder="0" class="mt-0 mx-0" style="width: 100%; height: 100vh; border:0; max-height: 200px;" 
                allowfullscreen="" aria-hidden="false" tabindex="0" frameborder="0"></iframe>
        <button onclick="fakultas()" class="btn btn-primary mt-1">Download Format KOP Fakultas Doc</button>
    </div>
</div>
<div class="row mx-3">
    <div class="col-sm-12">
        <div class="card-header mt-3 bg-dark text-white">Format Kepala Surat Lembaga</div>
        <iframe src="{{ asset('storage/file/KepalaSuratLembaga.pdf')}}"                     
                frameborder="0" class="mt-0 mx-0" style="width: 100%; height: 100vh; border:0; max-height: 200px;" 
                allowfullscreen="" aria-hidden="false" tabindex="0" frameborder="0"></iframe>
        <button onclick="lembaga()" class="btn btn-primary mt-1">Download Format KOP Lembaga Doc</button>
    </div>
</div>



</div>

@endsection