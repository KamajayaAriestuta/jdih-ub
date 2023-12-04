@extends('user.layouts.base')
@section('title', 'Tentang Kami')
@section('content')

<div class="container-fluid page-header py-5 mb-2">
    <div class="container py-5">
        <h3 class="display-3 text-white animated slideInRight">Infografis</h3>
    </div>
</div>
<div class="row col-12 justify-content-center p-4">
    <div class="row col-4 justify-content-center align-items-center">
        <h5>Peraturan Rektor Nomor 60 Tahun 2023</h5>
        <img src="{{ asset('template_user/img/pertor60.jpeg')}}" width="100%" alt="">
    </div>
    <div class="row col-4 justify-content-center align-items-center">
        <h5>Peraturan Rektor Nomor 60 Tahun 2023</h5>
        <img src="{{ asset('template_user/img/pertor60.jpeg')}}" width="100%" alt="">
    </div>
    <div class="row col-4 justify-content-center align-items-center">
        <h5>Peraturan Rektor Nomor 60 Tahun 2023</h5>
        <img src="{{ asset('template_user/img/pertor60.jpeg')}}" width="100%" alt="">
    </div>
</div>
    
@endsection
