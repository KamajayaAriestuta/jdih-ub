@extends('admin.layouts.base')
@section('title', 'Produk')
@section ('content')
<div class="container-fluid">
  <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
          <h4></h4>
        </div>
      </div>
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">
            <a href="{{route('admin.produk')}}">Produk</a>
          </li>
        </ol>
      </div>
    </div>
  <div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-pills mb-3">
          <li class="nav-item">
            <a href="{{ route('admin.produk.create')}}"  class="nav-link btn-primary mr-1 show active">Tambah Produk</a>
          </li>
        </ul>
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
                    <th>Status</th>
                    <th>Tujuan</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($nasional as $data_nasional)
                    <tr>
                      <td>{{ $data_nasional->perihal }}</td>
                      <td>{{ $data_nasional->kategori->role_kategori }}</td>
                      <td>{{ $data_nasional->nomor }}</td>
                      <td>{{ $data_nasional->tahun }}</td>
                      <td>
                        <a href=" {{ asset('storage/file/'. $data_nasional->file_upload)}}" target="_blank">
                          <button class="btn btn-primary">View</button>
                        </a>
                       
                      </td>
                      <td>{{ $data_nasional->status->nama_status }}</td>
                      <td>{{ $data_nasional->unit_kerja->name }}</td>
                      <td>
                        <a href="{{ route('admin.produk.edit', $data_nasional->id) }}" class="btn btn-secondary">
                          <i class="fas fa-edit"></i>
                        </a>
                         <form action="{{ route('admin.produk.delete', $data_nasional->id) }}" method="post">
                          @method('delete')
                          @csrf
                          <button class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                          </button>
                        </form>
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
</div>
  @endsection
@section ('js')

<script>
  $('#data').DataTable()
</script>

@endsection