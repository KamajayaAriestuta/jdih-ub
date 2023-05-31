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
      <div class="col-md-12">
        <h5>Pemohon Unit Kerja</h5>
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
                    {{-- @foreach ($data as $data_pemohon) --}}
                      <tr>
                        <td>s</td>
                        <td>s</td>
                        <td>s</td>
                        <td>s</td>
                      </tr>
                    {{-- @endforeach --}}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

