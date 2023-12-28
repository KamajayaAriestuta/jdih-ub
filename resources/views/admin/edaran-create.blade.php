@extends('admin.layouts.base')
@section('title', 'Tambah Produk')
@section ('content')


  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h5>Tambah Edaran</h5>
      </div>
    </div>
  <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.produk') }}">Produk</a> </li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.produk.create') }}">Tambah Edaran</a></li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card">

      {{-- Alert Here --}}
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
          @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
          @endforeach
          </ul>
        </div>
      @endif
    <div class="card-body">
    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.edaran.store') }}">
    @csrf
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <label for="title">Perihal</label>
            <input type="text" class="form-control" id="perihal" name="perihal" value="{{ old('perihal') }}" placeholder="Perihal Produk yang Dibahas">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group">
            <label for="title">Nomor</label>
            <input type="text" class="form-control" id="nomor" name="nomor" value="{{ old('nomor') }}" placeholder="Perihal Produk yang Dibahas">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group">
            <label for="title">Tahun</label>
            <input type="text" class="form-control" id="tahun" name="tahun" value="{{ old('tahun') }}" placeholder="Perihal Produk yang Dibahas">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="form-group">
          <label for="small-thumbnail">File Edaran</label>
          <input type="file" class="form-control" id="file_upload" name="file_upload">
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 mt-2 mb-3">
        <button type="submit" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 mt-2 mb-3">Tambah</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
</div>


@endsection

@section ('js')
  <script>
    $('#tanggal_ditetapkan').datetimepicker({
      format: 'YYYY-MM-DD'
    });

     $('#tanggal_diundangkan').datetimepicker({
      format: 'YYYY-MM-DD'
    });
  </script>
@endsection