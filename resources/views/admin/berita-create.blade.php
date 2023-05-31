@extends('admin.layouts.base')
@section('title', 'Tambah Berita')
@section ('content')

  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h5>Tambah Berita</h5>
      </div>
    </div>
  <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.berita') }}">Berita</a> </li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.berita.create') }}">Tambah Berita</a></li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
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
    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.berita.store') }}">
    @csrf
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
          <label for="small-thumbnail">Thumbnail</label>
          <input type="file" class="form-control" id="file_upload" name="file_upload">
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}" placeholder="Judul Berita">
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
          <label for="text">Teks Berita</label>
          <textarea class="form-control" id="editor" name="text" rows="10" cols="8"></textarea>
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

  <script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
@endsection