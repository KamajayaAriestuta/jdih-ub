@extends('admin.layouts.base')
@section('title', 'Berita')
@section ('content')

  <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
          <h5>Semua Berita</h5>
        </div>
      </div>
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">
            <a href="{{route('admin.berita')}}">Produk</a>
          </li>
        </ol>
      </div>
    </div>
  <div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-pills mb-3">
          <li class="nav-item">
            <a href="{{ route('admin.berita.create')}}"  class="nav-link btn-primary mr-1 show active">Tambah Berita</a>
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
                    <th>Cover</th>
                    <th>Judul</th>
                    <th>Edit/View</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($berita as $data)
                    <tr>
                      <td class="col-sm-3 text-center">
                        <img src="{{ asset('storage/file/'. $data->file_upload)}}" 
                        width="200" height="100" alt="" style="object-fit: cover">
                        </td>
                      <td>{{ $data->judul }}</td>
                      <td class="col-sm-1 text-center">
                        <a href="{{ route('admin.berita.edit', $data->id) }}" class="btn btn-primary">
                          <i class="fas fa-eye"></i>
                        </a>
                      </td>
                        <td class="col-sm-1 text-center">
                         <form action="{{ route('admin.berita.delete', $data->id) }}" method="post">
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

  @endsection
@section ('js')

<script>
  $('#data').DataTable()
</script>

@endsection