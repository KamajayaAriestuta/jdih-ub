@extends('superadmin.layouts.base')
@section('title', 'Tambah Admin')
@section ('content')


  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h5>Tambah Admin</h5>
      </div>
    </div>
  <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('superadmin.dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active"> <a href="{{ route('superadmin.admin') }}">Admin</a> </li>
      <li class="breadcrumb-item active"> <a href="">Tambah Admin</a></li>
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
    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.register.store') }}">
    @csrf
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label for="title">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Admin">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label for="title">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Admin">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label for="title">No.Telp</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="No. Telp Admin">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label for="title">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
          <label for="small-thumbnail">Foto</label>
          <input type="file" class="form-control" id="avatar" name="avatar">
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <label for="small-thumbnail">Unit Kerja</label>
      <select class="custom-select" name="unit_kerja_id">
        <option value=""> - Pilih Unit Kerja -</option>
        @foreach ($unit_kerja as $data_tujuan)
            <option value="{{ $data_tujuan->id }}" {{ old('unit_kerja_id') == $data_tujuan->id ? 'selected' : null }}> {{ $data_tujuan->name }} </option>
        @endforeach
      </select> 
      </div>
      <div class="input-group mb-3">
        <select class="custom-select" name="unit_kerja_2_id">
             <option value="">Pilih Unit Kerja 2 (Opsional)</option>
             @foreach ($unit_kerja as $data_tujuan)
                 <option value="{{ $data_tujuan->id }}" {{ old('unit_kerja_2_id') == $data_tujuan->id ? 'selected' : null }}> {{ $data_tujuan->name }} </option>
             @endforeach
           </select> 
       </div>
       <div class="input-group mb-3">
        <select class="custom-select" name="unit_kerja_3_id">
             <option value="">Pilih Unit Kerja 3 (Opsional)</option>
             @foreach ($unit_kerja as $data_tujuan)
                 <option value="{{ $data_tujuan->id }}" {{ old('unit_kerja_3_id') == $data_tujuan->id ? 'selected' : null }}> {{ $data_tujuan->name }} </option>
             @endforeach
           </select> 
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