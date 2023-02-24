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
          <div class="row">
            <div class="col-md-12">
              <a href="{{ route('admin.data.create')}}" class="btn btn-primary">Create Data</a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Perihal</th>
                    <th>Kategori</th>
                    <th>Nomor</th>
                    <th>Tahun</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection