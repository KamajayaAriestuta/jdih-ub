@extends('user.layouts.base')
@section('title', 'Edaran Rektor')
@section('content')

<div class="container-fluid px-0 mb-0">
    <div class="container-fluid page-header py-5 mb-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Surat Edaran Rektor</h1>
        </div>
    </div>
    <div class="m-5">
        <div class="card card-danger">
        <div class="card-body m-3">
            <div class="row">
            <div class="col-md-12">
                <table id="data_rapertor" class="table table-striped">
                <thead class="thead-dark" style="color: black">
                    <tr>
                        <th class="col-1">Nomor</th>
                        <th class="col-9">Perihal</th>
                        <th class="col-2">Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($edaran as $data_edaran)
                    <tr style="color: black" class="small">
                        <td>{{ $data_edaran->nomor }}</td>
                        <td><a href="{{ asset('storage/file/'. $data_edaran->file_upload)}}">{{ $data_edaran->perihal }}</a></td>
                        <td>{{ $data_edaran->tahun }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection





