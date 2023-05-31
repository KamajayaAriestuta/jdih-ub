@extends('admin.layouts.base')

@section('title', 'Pemohon')

@section ('content')

  <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
          <h5>Semua Pemohon</h5>
        </div>
      </div>
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">
            <a href="{{route('admin.pemohon')}}">Pemohon</a>
          </li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>1</h3>
            <p>Pemohon FH</p>
          </div>
          <div class="icon">
            <i class="fas fa fa-university"></i>
          </div>
          <a href="{{ route('admin.produk.nasional') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>1</h3>
            <p>Pemohon Vokasi</p>
          </div>
          <div class="icon">
            <i class="fas fa fa-university"></i>
          </div>
          <a href="{{ route('admin.produk.daerah') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>0</h3>
            <p>Pemohon FMIPA</p>
          </div>
          <div class="icon">
            <i class="fas fa fa-university"></i>
          </div>
          <a href="{{ route('admin.produk.universitas') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>2</h3>
            <p>Total Pemohon</p>
          </div>
          <div class="icon">
            <i class="fas fa-files-o"></i>
          </div>
          <a href="{{ route('admin.produk') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-pills mb-3">
          <li class="nav-item">
            <a href="{{ route('pemohon.register') }}"  class="nav-link btn-primary mr-1 show active">Tambah Pemohon</a>
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
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. Telp</th>
                    <th>Unit Kerja</th>
                    <th>Role</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data_pemohon as $data)
                    <tr>                   
                      <td> {{ $data->name }} </td>
                      <td> {{ $data->email }} </td>
                      <td> {{ $data->phone_number }} </td>
                      <td> {{ ucfirst ($data->unit_kerja->name)}} </td>
                      <td> {{ ucfirst ($data->role) }} </td>
                      <td>
                        <a href="{{ route('admin.pemohon.edit', $data->id) }}" class="btn btn-secondary">
                          <i class="fas fa-edit"></i>
                        </a>
                      </td>
                      <td>
                         <form action="{{ route('admin.pemohon.delete', $data->id) }}" method="post">
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