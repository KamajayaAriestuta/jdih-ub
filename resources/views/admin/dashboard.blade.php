@extends('admin.layouts.base')

@section('title', 'Admin Dashboard')
@section ('content')

<div class="row">
  @if(session('register'))
  <div class="alert alert-success">
      {{ session('register') }}
  </div>
  @endif
</div>
<h5 class="mb-4">Informasi Produk</h5>
  <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $pertor }}</h3>
            <p>Peraturan Rektor</p>
          </div>
          <div class="icon">
            <i class="fas fa fa-university"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $perMWA}}</h3>
            <p>Peraturan MWA</p>
          </div>
          <div class="icon">
            <i class="fas fa fa-home"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>{{ $perSAU }}</h3>
            <p>Peraturan SAU</p>
          </div>
          <div class="icon">
            <i class="fas fa fa-graduation-cap"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $total }}</h3>
            <p>Total Peraturan</p>
          </div>
          <div class="icon">
            <i class="fas fa-files-o"></i>
          </div>
        </div>
      </div>
  </div>
    </div>
  </div>
@endsection


@section('js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.1.0/echarts.min.js"></script>
<script src="{{ asset('template_admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template_admin/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('template_admin/plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('template_admin/plugins/flot/plugins/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('template_admin/plugins/flot/plugins/jquery.flot.pie.js') }}"></script>

@endsection

