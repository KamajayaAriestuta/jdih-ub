@extends('admin.layouts.base')
@section('title', 'Notifikasi')
@section ('content')


<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
          <div class="welcome-text">
            <h4>Notifikasi</h4>
          </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">
              <a href="{{route('pemohon.notify')}}">Notifikasi</a>
            </li>
          </ol>
        </div>
    </div>

    <div class="col-lg-12 col-12">
        @foreach($user->notifications as $notifications)
        <div class="bg-blue-notification p-4 mb-2">
            <b>{{ $notifications->data['name'] }}</b> is Registered |
            <a href="{{ route('approved')}}" class="ml-1">Aktifkan Akun?</a>
            <a href="{{ route('pemohon.maskared', $notifications->id) }}"><button class="btn btn-danger ml-2"><i class="fas fa-trash-alt"></i></button></a>
        </div>
        @endforeach
      </div>

</div>
@endsection