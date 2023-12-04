@extends('user.cari_produk')
@section('title', 'Hasil Pencarian')
@section('hasil_pencarian')
<div class="container-xl mt-5">
    <div class="row">
        <div class="col-sm-4 col-12" data-wow-delay="0.1s">
            <div class="mb-4 bg-white p-4" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
                <h4 class="" style="color: #4a4a4a;">Tahun 2023-2019</h4>
                <hr>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2023') }}"><p style="font-size: 15px">Peraturan Tahun 2023 <span class="bg-dark text-white p-1">{{ $per2023 }}</span></p></a>
                </div>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2022') }}"><p style="font-size: 15px">Peraturan Tahun 2022 <span class="bg-dark text-white p-1">{{ $per2022 }}</span></p></a>
                </div>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2021') }}"><p style="font-size: 15px">Peraturan Tahun 2021 <span class="bg-dark text-white p-1">{{ $per2021 }}</span></p></a>
                </div>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2020') }}"><p style="font-size: 15px">Peraturan Tahun 2020 <span class="bg-dark text-white p-1">{{ $per2020 }}</span></p></a>
                </div>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2019') }}"><p style="font-size: 15px">Peraturan Tahun 2019 <span class="bg-dark text-white p-1">{{ $per2019 }}</span></p></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-12" data-wow-delay="0.1s">
            <div class="mb-4 bg-white p-4" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
                <h4 class="" style="color: #4a4a4a;">Tahun 2018-2014</h4>
                <hr>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2018') }}"><p style="font-size: 15px">Peraturan Tahun 2018 <span class="bg-dark text-white p-1">{{ $per2018 }}</span></p></a>
                </div>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2017') }}"><p style="font-size: 15px" class="text-danger">Peraturan Tahun 2017 <span class="bg-dark text-white p-1">{{ $per2017 }}</span></p></a>
                </div>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2016') }}"><p style="font-size: 15px">Peraturan Tahun 2016 <span class="bg-dark text-white p-1">{{ $per2016 }}</span></p></a>
                </div>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2015') }}"><p style="font-size: 15px">Peraturan Tahun 2015 <span class="bg-dark text-white p-1">{{ $per2015 }}</span></p></a>
                </div>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2014') }}"><p style="font-size: 15px">Peraturan Tahun 2014 <span class="bg-dark text-white p-1">{{ $per2014 }}</span></p></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-12 " data-wow-delay="0.1s">
            <div class="mb-4 bg-white p-4" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
                <h4 class="" style="color: #4a4a4a;">Tahun 2015-2011</h4>
                <hr>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2013') }}"><p style="font-size: 15px">Peraturan Tahun 2013 <span class="bg-dark text-white p-1">{{ $per2013 }}</span></p></a>
                </div>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2012') }}"><p style="font-size: 15px">Peraturan Tahun 2012 <span class="bg-dark text-white p-1">{{ $per2012 }}</span></p></a>
                </div>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2011') }}"><p style="font-size: 15px">Peraturan Tahun 2011 <span class="bg-dark text-white p-1">{{ $per2011 }}</span></p></a>
                </div>
                <div class="col-md-12 col-12">
                    <a href="{{ route('per2010') }}"><p style="font-size: 15px">Peraturan Tahun 2010 <span class="bg-dark text-white p-1">{{ $per2010 }}</span></p></a>
                </div>
                <div class="col-md-12 col-12">
                    <a href="#"><p style="font-size: 15px" class="text-danger">Peraturan Tahun 2009 <span class="bg-dark text-white p-1">{{ $per2009 }}</span></p></a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container mt-5">
        <h4 class="mt-2 text-center" style="color: #000">HASIL <span style="color: #5c5c5c">PENCARIAN</span></h4>
        <div class="row">
            @if($result->isEmpty())
            <img src="{{ asset('template_user/img/error3.png') }}" style="max-width: 50%; height: auto; display: block; margin-left: auto; margin-right: auto; margin-top: 10px;">
            <h5 class="text-center mt-4"> Peraturan tidak ditemukan</h5>
            @else
            <div class="col-sm m-2" data-wow-delay="0.1s">
                <div class="mb-4 bg-white" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border-radius: 5px;">
 
                    @foreach ($result as $data)
                    <div class="p-2 d-inline">
                        <div class="col-lg-10 col-md-10 px-4">
                            <p>{{ $data->kategori->nama_kategori }} | <a class="text-danger" href="#">Nomor {{ $data->nomor }} Tahun {{ $data->tahun }}</a></p>
                            <a href="{{ route('detail_produk', $data->id) }}"><h5 class="ml-2 d-inline" style="color: #000">{{ $data->perihal }} </h5></a>
                            <p class="text-danger">Status: <span style="color: #5c5c5c">{{ $data->status }}</span></p>
                        </div>
                        <nav class="navbar navbar-expand-lg py-0 pe-5">
                            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <div class="ms-auto inline d-flex" style="margin-bottom: -5px">
                                    <p style="font-size: 15px"><a href="{{ asset('storage/file/'. $data->file_upload)}}" class="text-primary mr-3"> <i class="fa fa-eye m-2"></i><span class="ml-2">view | </span></a></p>  
                                    <p style="font-size: 15px"><a id="downloadLink" onclick="downloadFiles()" class="text-primary"> <i class="fa fa-file m-2"></i><span class="ml-2">download</span></a></p>
                                </div>  
                            </div>
                        </nav>
                        <hr>
                    </div>
                    <script>
                        function downloadFiles() {
                            // Tautan pertama
                            var link1 = document.createElement('a');
                            link1.href = "{{ asset('storage/file/'. $data->file_upload)}}";
                            link1.download = "{{ $data->perihal }}";
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
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div> 

@endsection
