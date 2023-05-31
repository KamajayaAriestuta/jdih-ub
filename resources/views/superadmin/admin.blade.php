@extends('superadmin.layouts.base')
@section('title', 'Produk')
@section ('content')

  <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
          <h5>Semua Admin</h5>
        </div>
      </div>
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('superadmin.dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">
            <a href="{{route('superadmin.produk')}}">Admin</a>
          </li>
        </ol>
      </div>
    </div>
  <div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-pills mb-3">
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
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No.Telp</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data_admin as $data)
                    <tr>
                      <td class="col-sm-1"><img src="{{ asset('storage/file/'.$data->avatar)}}" alt="" width="50"></td>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->email }}</td>
                      <td>{{ $data->phone_number }}</td>
                      <td>
                        <form action="{{ route('superadmin.admin.delete', $data->id) }}" method="post">
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