@extends('admin.layouts.base')
@section('title', 'Edit '. $data->kategori->nama_kategori)
@section ('content')


  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h5>Edit Produk</h5>
      </div>
    </div>
  <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.produk') }}">Produk</a> </li>
      <li class="breadcrumb-item active"> <a href="">Edit Produk</a></li>
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
    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.produk.update', $data->id) }}">
        @csrf
        @method('PUT')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label for="title">Perihal</label>
            <input type="text" class="form-control" id="perihal" name="perihal" value="{{ $data->perihal }}" placeholder="OTK Universitas Brawijaya">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label>Kategori</label>
            <select class="custom-select" name="kategori_id">
              <option value="{{ $data->kategori->id }}">{{ $data->kategori->nama_kategori }}</option>
              @foreach ($kategori as $item)
                  <option value="{{ $item->id }}" {{ old('kategori_id') == $item->id ? 'selected' : null }}> {{ $item->nama_kategori }} </option>
              @endforeach
            </select> 
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="duration">Nomor</label>
            <input type="text" class="form-control" id="nomor" name="nomor" placeholder="82" value="{{ $data->nomor }}">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="duration">Nomor Perundangan</label>
            <input type="text" class="form-control" id="nomor_perundangan" name="nomor_perundangan" placeholder="82" value="{{ $data->nomor_perundangan }}">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="duration">Tahun</label>
            <input type="text" class="form-control" id="tahun" name="tahun" placeholder="2022" value="{{ $data->tahun }}">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label>Tanggal Ditetapkan</label>
          <div class="input-group date" id="tanggal_ditetapkan" data-target-input="nearest">
              <input type="text" name="tanggal_ditetapkan" class="form-control datetimepicker-input" data-target="#tanggal_ditetapkan" value="{{ $data->tanggal_ditetapkan }}"/>
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
              <input type="text" name="tanggal_diundangkan" class="form-control datetimepicker-input" data-target="#tanggal_diundangkan" value="{{ $data->tanggal_diundangkan }}" />
            <div class="input-group-append" data-target="#tanggal_diundangkan" data-toggle="datetimepicker">
              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="duration">Kaitan</label>
            <input type="text" class="form-control" id="kaitan" name="kaitan" placeholder="kaitan Produk" value="{{ $data->kaitan }}">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="small-thumbnail">File Produk</label>
            <input type="file" class="form-control" id="file_upload" name="file_upload">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label>Status</label>
            <select class="custom-select" name="status_id">
            <option value="{{ $data->status->id }}">{{ $data->status->nama_status }}</option>
              @foreach ($status as $itemstatus)
                  <option value="{{ $itemstatus->id }}" {{ old('status_id') == $itemstatus->id ? 'selected' : null }}> {{$itemstatus->nama_status}} </option>
              @endforeach
            </select> 
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
          <label>Publikasi</label>
          <select class="custom-select" name="publikasi">
          <option value="0"> Tidak Publikasi </option>
          <option value="1"> Publikasi </option>
          </select> 
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">  
        <button type="submit" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 mb-3">Edit</button>
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