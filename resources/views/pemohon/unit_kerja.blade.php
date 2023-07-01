@extends('pemohon.layouts.base')

@section('title', 'Unit Kerja')
@section ('content')

    <table class="table">
        <tbody>
          <tr class="something">
            <td class="col-md-3">Nama Fakultas</td>
            <td class="col-md-9">: {{ $data_unit->name }}</td>
          </tr>
          <tr>
            <td scope="row">Email</td>
            <td>: {{ $data_unit->email }}</td>
          </tr>
          <tr>
            <td scope="row">No. Telp</td>
            <td>: {{ $data_unit->phone_number }}</td>
          </tr>
        </tbody>
      </table>
      <br>
      <div class="col-md-12">
        <h5>Pemohon Unit Kerja {{ $data_unit->name }}</h5>
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
                      <th>No. Telp</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($unit_user as $data_unit)
                      <tr>
                        <td class="col-sm-2 text-center">
                          <img src="{{ asset('storage/file/'. $data_unit->avatar)}}" width="100"></td>
                        <td>{{ $data_unit->name }}</td>
                        <td>{{ $data_unit->email }}</td>
                        <td>{{ $data_unit->phone_number }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

