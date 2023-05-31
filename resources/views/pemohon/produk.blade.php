@extends('pemohon.layouts.base')

@section('title', 'Produk')
@section ('content')

<div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
          <h5>Semua Produk</h5>
        </div>
      </div>
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('pemohon.dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">
            <a href="{{route('admin.produk')}}">Produk</a>
          </li>
        </ol>
      </div>
    </div>
  <div class="row">
    <div class="col-lg-12">
        @if(session()->has('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif
      </div>
    <div class="col-md-12">
      <div class="card card-danger">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <table id="data" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Perihal</th>
                    <th>Kategori</th>
                    <th>Nomor</th>
                    <th>Tahun</th>
                    <th>File</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $data_pemohon)
                    <tr>
                      <td>{{ $data_pemohon->perihal }}</td>
                      <td>{{ $data_pemohon->kategori->nama_kategori }}</td>
                      <td>{{ $data_pemohon->nomor }}</td>
                      <td>{{ $data_pemohon->tahun }}</td>
                      <td>
                        <a href="{{ asset('storage/file/'. $data_pemohon->file_upload)}}" target="_blank">
                          <button class="btn btn-info">View</button>
                        </a>
                      </td>
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

@section ('js')

<script>
  $('#data').DataTable()
</script>
@endsection