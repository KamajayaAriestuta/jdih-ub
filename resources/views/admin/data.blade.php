@extends('admin.layouts.base')

@section('title'. 'Data-Create')

@section ('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Data</h3>
        </div>
        <div class="card-body">
          @if(session()->has('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>

          @endif

          <div class="row">
            <div class="col-md-12">
              <a href="{{ route('admin.data.create')}}" class="btn btn-primary">Create Data</a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <table id="data" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Perihal</th>
                    <th>Kategori</th>
                    <th>Nomor</th>
                    <th>Tahun</th>
                    <th>File</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($datas as $data)
                    <tr>
                      <td>{{ $data->id }}</td>
                      <td>{{ $data->perihal }}</td>
                      <td>{{ $data->kategori->nama_kategori }}</td>
                      <td>{{ $data->nomor }}</td>
                      <td>{{ $data->tahun }}</td>
                      <td>
                        <a href=" {{ asset('storage/file/'. $data->file_upload)}}" target="_blank">
                          <button class="btn btn-info">Download</button>
                        </a>
                       
                      </td>
                      <td>{{ $data->status->nama_status }}</td>
                      <td>
                        <a href="{{ route('admin.data.edit', $data->id) }}" class="btn btn-secondary">
                          <i class="fas fa-edit"></i>
                        </a>
                         <form action="{{ route('admin.data.delete', $data->id) }}" method="post">
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