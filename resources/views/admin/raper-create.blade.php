@extends('admin.layouts.base')
@section('title', 'Tambah Produk')
@section ('content')


  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h5>Tambah Rancangan</h5>
      </div>
    </div>
  <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.produk') }}">Produk</a> </li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.produk.create') }}">Tambah Rancangan</a></li>
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
    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.raper.store') }}">
    @csrf
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label for="title">Perihal</label>
            <input type="text" class="form-control" id="perihal" name="perihal" value="{{ old('perihal') }}" placeholder="Perihal Produk yang Dibahas">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label>Kategori</label>
            <select class="custom-select" name="kategori_id">
              <option value=""> - Pilih Kategori Produk -</option>
              @foreach ($kategori as $item)
                  <option value="{{ $item->id }}" {{ old('kategori_id') == $item->id ? 'selected' : null }}> {{ $item->nama_kategori }} </option>
              @endforeach
            </select> 
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