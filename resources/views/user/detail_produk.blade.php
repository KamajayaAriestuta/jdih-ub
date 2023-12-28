@extends('user.layouts.base')
@section('title', $detail->perihal)
@section('content')

<div class="container-fluid px-0 mb-0">
    <div class="container-fluid page-header py-5 mb-2">
      <div class="container py-5">
          <h3 class="display-3 text-white animated slideInRight">{{ $detail->kategori->nama_kategori}}</h3>
          <p class="fw-medium text-uppercase text-white mb-2">{{ $detail->kategori->nama_kategori}} No {{ $detail->nomor}} Tahun {{ $detail->tahun}} Tentang {{ $detail->perihal}}</p>
      </div>
  </div>

<div class="container-fluid">
  <div class="container">
    <h4 class="mt-4 mb-3" style="color: #000">DETAIL <span style="color: #5c5c5c">DOKUMEN</span></h4>
    <div class="mb-4 bg-white p-3" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
      <div class="card-content">
      <div class="container">
          <div class="row gy-5 gx-4 wow fadeInUp" data-wow-delay="0.1s">
              <table class="table">
                  <tbody style="color: black; font-size: 14px;">
                    <tr class="something">
                      <td class="col-md-3">Perihal</td>
                      <td class="col-md-9"> {{ $detail->perihal }}</td>
                    </tr>
                      <td>Kategori</td>
                      <td> <a href="{{ route('jenis_produk', $detail->kategori->id) }}" class="text-danger">{{ $detail->kategori->nama_kategori}}</a></td>
                    </tr>
                    <tr>
                      <td scope="row">Nomor</td>
                      <td> {{ $detail->nomor }}</td>
                    </tr>
                    <tr>
                      <td scope="row">Tahun</td>
                      <td> {{ $detail->tahun }}</td>
                    </tr>
                    <tr>
                      <td scope="row">Tanggal Ditetapkan</td>
                      <td> {{ \Carbon\Carbon::parse($detail->tanggal_ditetapkan)->locale('id_ID')->translatedFormat('d F Y') }}</td>
                    </tr>
                    <tr>
                      <td scope="row">Penyusun</td>
                      <td> {{ $detail->penyusun }}</td>
                    </tr>
                    <tr>
                      <td scope="row">Kaitan </td>
                      <td> {!! html_entity_decode($detail->kaitan, ENT_QUOTES, 'UTF-8') !!}</td>                   </tr>
                  </tbody>
                </table>
                <div class="my-1 px-1">
                  <p style="font-size: 15px"><a id="downloadLink" onclick="downloadFiles()" class="fa fa-file m-2"> download</a></p>
              </div>
              <iframe src="{{ asset('storage/file/'. $detail->file_upload)}}"                     
                frameborder="0" class="mt-0 mx-0" style="min-height: 700px; border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0" frameborder="0"></iframe>
          </div>
    </div>
</div>
</div>
</div>
</div>



</div>

<script>
  function downloadFiles() {
      // Tautan pertama
      var link1 = document.createElement('a');
      link1.href = "{{ asset('storage/file/'. $detail->file_upload)}}";
      link1.download = "{{ $detail->perihal }}";
      document.body.appendChild(link1);
      link1.click();
      document.body.removeChild(link1);
  
      // Tautan kedua
      var link2 = document.createElement('a');
      link2.href = "https://docs.google.com/forms/d/e/1FAIpQLSc2-rcxWHfIC1kLJlBRnjYXjN2HAMFKx6n_msDppgR7svULzw/viewform?fbzx=-2537792061218435054";
      link2.target = "_blank"; // Menambahkan atribut target=_blank
      link2.download = "Survei SKM";
      document.body.appendChild(link2);
      link2.click();
      document.body.removeChild(link2);

  }
  </script>

@endsection

