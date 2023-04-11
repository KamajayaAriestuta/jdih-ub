@extends('admin.layouts.base')
@section('title', 'Mailbox')
@section ('content')


<div class="container-fluid">
    <h2>Pemohon Register</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Unit Kerja</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data_pemohon as $pemohon)
        <tr>
            <td>{{ $pemohon->name }}</td>
            <td> {{ $pemohon->email }} </td>
            <td> {{ $pemohon->unit_kerja->name }}</td>
            <td class="">
                <div class="icheck-primary">
                    <form action="{{ route('pemohon.approved', $pemohon->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <button class="btn btn-success" type="int">Approved</button>
                    </form>
                    <a href=""><button class="btn btn-danger">Denied</button></a>
                </div>
            </td>
        </tr> 
        @endforeach
        </tbody>
  </table>
</div>
@endsection