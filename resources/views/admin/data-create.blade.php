@extends('admin.layouts.base')
@section('title'. 'Data-Create')
@section ('content')

<!-- row -->
<div class="container-fluid">
  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Add Data</h4>
      </div>
    </div>
  <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.data') }}">Data</a> </li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.data.create') }}">Add Data</a></li>
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
    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.data.store') }}">
    @csrf
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label for="title">Perihal</label>
            <input type="text" class="form-control" id="perihal" name="perihal" value="{{ old('perihal') }}" placeholder="Perihal Data yang Dibahas">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label>Kategori</label>
            <select class="custom-select" name="kategori_id">
              <option value=""> - Pilih Kategori Data -</option>
              @foreach ($kategori as $item)
                  <option value="{{ $item->id }}" {{ old('kategori_id') == $item->id ? 'selected' : null }}> {{ $item->nama_kategori }} </option>
              @endforeach
            </select> 
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="duration">Nomor</label>
          <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor Data yang Dicantumkan" value="{{ old('nomor') }}">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="duration">Nomor Perundangan</label>
          <input type="text" class="form-control" id="nomor_perundangan" name="nomor_perundangan" placeholder="Nomor Perundangan yang Dicantumkan" value="{{ old('nomor_perundangan') }}">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="duration">Tahun</label>
          <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun Data" value="{{ old('tahun') }}">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label>Tanggal Ditetapkan</label>
          <div class="input-group date" id="tanggal_ditetapkan" data-target-input="nearest">
            <input type="text" name="tanggal_ditetapkan" class="form-control datetimepicker-input" data-target="#tanggal_ditetapkan" value="{{ old('tanggal_ditetapkan') }}" placeholder="Tanggal yang Diundangkan pada Data"/>
            <div class="input-group-append" data-target="#tanggal_ditetapkan" data-toggle="datetimepicker">
              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label>Tanggal Diundangkan</label>
          <div class="input-group date" id="tanggal_diundangkan" data-target-input="nearest">
            <input type="text" name="tanggal_diundangkan" class="form-control datetimepicker-input" data-target="#tanggal_diundangkan" value="{{ old('tanggal_diundangkan') }}" placeholder="Tanggal yang Diundangkan pada Data" />
            <div class="input-group-append" data-target="#tanggal_diundangkan" data-toggle="datetimepicker">
              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="duration">Kaitan</label>
          <input type="text" class="form-control" id="kaitan" name="kaitan" placeholder="Kaitan yang Bisa Dicantumkan pada Data" value="{{ old('kaitan') }}">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="small-thumbnail">File Data</label>
          <input type="file" class="form-control" id="file_upload" name="file_upload">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label>Status</label>
          <select class="custom-select" name="status_id">
          <option value=""> - Pilih Status Data - </option>
            @foreach ($status as $itemstatus)
              <option value="{{ $itemstatus->id }}" {{ old('status_id') == $itemstatus->id ? 'selected' : null }}> {{$itemstatus->nama_status}} </option>
            @endforeach
          </select> 
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
          <label>Rekomendasi</label>
          <select class="custom-select" name="rekomendasi">
            <option value="0" {{ old('rekomendasi') === '0'? "selected" : "" }}>Rekomendasi</option>
            <option value="1" {{ old('rekomendasi') === '1'? "selected" : "" }}>Tidak Rekomendasi</option>
          </select>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 mt-2 mb-3">
        <button type="submit" class="btn btn-success">Submit</button>
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