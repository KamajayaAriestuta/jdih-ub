@extends('admin.layouts.base')
@section('title', 'Edit '.auth()->user()->name)
@section ('content')

<!-- row -->
<div class="container-fluid">
  <div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
      <div class="welcome-text">
        <h4>Edit Unit Kerja</h4>
      </div>
    </div>
  <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item active"> <a href="{{ route('admin.pemohon') }}">Pemohon</a> </li>
      <li class="breadcrumb-item active"> <a href="">Edit Pemohon</a></li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      {{-- Alert Here --}}
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
          @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
          @endforeach
          </ul>
        </div>
      @endif
    <div class="card-body">
        {{-- @php
        $user_id = auth()->user()->id;
        @endphp --}}
    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.pemohon.update', $pemohon->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
            <label for="title">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $pemohon->name }}" placeholder="Nama Pemohon">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="duration">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Pemohon" value="{{ $pemohon->email }}"">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label for="duration">No.Telp</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="No. Telp Pemohon" value="{{ $pemohon->phone_number }}">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group">
          <label>Unit Kerja</label>
          <select class="custom-select" name="unit_kerja_id">
          <option value="{{ $pemohon->unit_kerja->id }}">{{ $pemohon->unit_kerja->name }}</option>
            @foreach ($unit_kerja as $unit)
                <option value="{{ $unit->id }}" {{ old('unit_kerja_id') == $unit->id ? 'selected' : null }}> {{$unit->name}} </option>
            @endforeach
          </select> 
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">  
        <button type="submit" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 mb-3">Edit</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>

@endsection
