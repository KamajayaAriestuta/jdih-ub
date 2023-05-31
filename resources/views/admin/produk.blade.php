@extends('admin.layouts.base')
@section('title', 'Produk')
@section ('content')

  <div class="row page-titles mx-0">
      <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
          <h5>Semua Produk</h5>
        </div>
      </div>
      <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">
            <a href="{{route('admin.produk')}}">Produk</a>
          </li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $sum_nasional }}</h3>
            <p>Produk Nasional</p>
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
            <h3>{{ $sum_daerah }}</h3>
            <p>Produk Daerah</p>
          </div>
          <div class="icon">
            <i class="fas fa fa-home"></i>
          </div>
          <a href="{{ route('admin.produk.daerah') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>{{ $sum_universitas }}</h3>
            <p>Produk Universitas</p>
          </div>
          <div class="icon">
            <i class="fas fa fa-graduation-cap"></i>
          </div>
          <a href="{{ route('admin.produk.universitas') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $sum_total }}</h3>
            <p>Total Produk</p>
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
            <a href="{{ route('admin.produk.create')}}"  class="nav-link btn-primary mr-1 show active">Tambah Produk</a>
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
                    <th>Perihal</th>
                    <th>Kategori</th>
                    <th>Nomor</th>
                    <th>Approve</th>
                    <th>Status</th>
                    <th>Tujuan</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($datas as $data)
                    <tr>
                      <td>{{ $data->perihal }} <br>
                        <a href=" {{ asset('storage/file/'. $data->file_upload)}}" target="_blank">
                          Download <i class="fas fa-download"></i>
                        </a>
                      </td>
                      <td>{{ $data->kategori->nama_kategori }}</td>
                      <td>{{ $data->nomor }}</td>
                        <td>
                          @if($data->approve === 2) <button class="btn btn-warning ">Pending</button>
                          @elseif($data->approve === 1) <button class="btn btn-success">Diterima</button>
                          @elseif($data->approve === 0) <button class="btn btn-danger">Ditolak</button>
                          @else <button class="btn btn-success">Diterima</button> @endif
                        </td>
                      <td>{{ $data->status->nama_status }} / 
                        @if ($data->publikasi == 1) Publikasi
                        @elseif($data->publikasi == 0) Tidak Publikasi @endif</td>
                      <td>{{ $data->unit_kerja->name }}</td>
                      <td>
                        <a href="{{ route('admin.produk.edit', $data->id) }}" class="btn btn-secondary">
                          <i class="fas fa-edit"></i>
                        </a>
                  
                         <form action="{{ route('admin.produk.delete', $data->id) }}" method="post">
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