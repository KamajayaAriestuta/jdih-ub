@extends('user.layouts.base')
@section('title', 'Rancangan Peraturan')
@section('content')

<div class="container-fluid px-0 mb-0">
    <div class="container-fluid page-header py-5 mb-2 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Rancangan Peraturan</h1>
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
                        <th class="col-3">Jenis</th>
                        <th class="col-9">Perihal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($raper as $data_raper)
                    <tr style="color: black" class="small">
                        <td >{{ $data_raper->kategori->nama_kategori }}</td>
                        <td>{{ $data_raper->perihal }}</td>
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





