@extends('admin.layouts.base')
@section('title', 'Rancangan Peraturan')
@section ('content')

  <div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-pills mb-3">
          <li class="nav-item">
            <a href="{{ route('admin.raper.create')}}"  class="nav-link btn-primary mr-1 show active">Tambah Rancangan</a>
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
              <table id="data" class="table table-striped">
                <thead class="thead-dark">
                  <tr>
                    <th class="col-sm-7">Perihal</th>
                    <th class="col-sm-3">Kategori</th>
                    <th class="col-sm-1"></th>
                    <th class="col-sm-1"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data_raper as $data)
                    <tr>
                      <td>{{ $data->perihal }}</td>
                      <td>{{ $data->kategori->nama_kategori }}</td>
                      <td>
                        <a href="{{ route('admin.raper.edit', $data->id) }}" class="btn btn-secondary">
                          <i class="fas fa-edit"></i>
                        </a>
                      </td>
                      <td>
                        <form action="{{ route('admin.raper.delete', $data->id) }}" method="post">
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