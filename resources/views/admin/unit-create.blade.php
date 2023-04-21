@extends('admin.layouts.base')
@section('title', 'Tambah Unit Kerja')
@section ('content')

<!-- row -->
<div class="container-fluid">
  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Tambah Unit Kerja</h4>
      </div>
    </div>
  <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.unit_kerja') }}">Unit Kerja</a> </li>
      <li class="breadcrumb-item active"> <a href="{{ route('unit_kerja.create') }}">Tambah Unit Kerja</a></li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Add Data</h4>
      </div>
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
    <form enctype="multipart/form-data" method="POST" action="{{ route('unit_kerja.store') }}">
        @csrf
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label for="title">Unit Kerja</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="duration">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
          <label for="duration">No.Telp</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number">
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">  
        <button type="submit" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 mb-3">Tambah</button>
      </div>
    </div>
  </form>
</div>
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