@extends('admin.layouts.base')
@section('title', 'Tambah Berita')
@section ('content')


  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h5>Edit Berita</h5>
      </div>
    </div>
  <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.berita') }}">Berita</a> </li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.berita.create') }}">Edit Berita</a></li>
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
      <div class="d-flex justify-content-center p-3">
        <img src="{{ asset('storage/file/'. $data->file_upload)}}" width="700" height="400" 
        style="object-fit: cover;" 
        class="justify-content-center">
      </div>
    <div class="card-body">
    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.berita.update', $data->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
          <label for="small-thumbnail">Ganti Thumbnail</label>
          <input type="file" class="form-control" id="file_upload" name="file_upload">
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $data->judul }}" placeholder="Judul Berita">
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group">
          <label for="text">Teks Berita</label>
          <textarea class="form-control" id="editor" name="text" rows="10">{{ $data->text }}</textarea>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 mt-2 mb-3">
        <button type="submit" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 mt-2 mb-3">Edit</button>
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
