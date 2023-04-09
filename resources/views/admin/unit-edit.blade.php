@extends('admin.layouts.base')
@section('title', 'Edit '.$data->name)
@section ('content')

<!-- row -->
<div class="container-fluid">
  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Edit Data</h4>
      </div>
    </div>
  <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.data') }}">Data</a> </li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.data.create') }}">Edit Data</a></li>
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
    <form enctype="multipart/form-data" method="POST" action="{{ route('unit_kerja.update', $data->id) }}">
        @csrf
        @method('PUT')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label for="title">Unit Kerja</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}" placeholder="OTK Universitas Brawijaya">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="duration">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="82" value="{{ $data->email }}">
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
          <label for="duration">No.Telp</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="82" value="{{ $data->phone_number }}">
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">  
        <button type="submit" class="btn btn-success col-lg-12 col-md-12 col-sm-12 ">Submit</button>
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