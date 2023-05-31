@extends('pemohon.layouts.base')
@section('title', 'Profil '. ucfirst(trans(auth()->user()->name)))
@section ('content')

  <h5 class="text-center">Edit Profil</h5>
  <div class="d-flex justify-content-center p-3">
    <img src="{{ asset('storage/file/'. auth()->user()->avatar)}}" width="100" class="rounded" alt="" >
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card">
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li> {{$error}} </li>
            @endforeach
            </ul>
          </div>
        @endif
        @if(session()->has('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif
          <div class="card-body">
              @php
                  $user_id = auth()->user()->id;
              @endphp
              <form enctype="multipart/form-data" method="POST" action="{{ route('pemohon.profil.update', $user_id) }}">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <label for="small-thumbnail">Avatar</label>
                    <input type="file" class="form-control" id="avatar" name="avatar">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                      <label for="title">Nama</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                      <label for="title">Email</label>
                      <input type="text" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                      <label for="title">No. Telp</label>
                      <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ auth()->user()->phone_number }}">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mt-2 mb-3">
                  <button type="submit" class="btn btn-primary">Edit Profil</button>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>


@endsection

@section ('js')
  <script>
    $('#tanggal_ditetapkan').datetimepicker({
      format: 'YYYY-MM-DD'
    });

     $('#tanggal_diundangkan').datetimepicker({
      format: 'YYYY-MM-DD'
    });
  </script>
@endsection