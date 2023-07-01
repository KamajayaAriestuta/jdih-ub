@extends('superadmin.layouts.base')

@section('title', 'Superadmin Dashboard')
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
            <h3>{{ $sum_nasional }}</h3>
            <p>Produk Nasional</p>
          </div>
          <div class="icon">
            <i class="fas fa fa-university"></i>
          </div>
          <a href="{{ route('superadmin.produk.nasional') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
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
          <a href="{{ route('superadmin.produk.daerah') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
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
          <a href="{{ route('superadmin.produk.universitas') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
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
          <a href="{{ route('superadmin.produk') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-12">
      <div class="small-box bg-white">
      <div id="chartPie" class="p-3" style="height: 292px;"></div>
      </div>
    </div>
    <div class="col-lg-6 col-6">
        <h5 class="mb-4 mt-3">Akses Superadmin</h5>
        <div class="row">
          <div class="col-md-12 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Halaman Admin</span>
                <span class="info-box-number">Jumlah Admin: {{ $jumlah_admin }}</span>
                <a href="{{ route('superadmin.admin') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><i class="far fa-files-o"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Halaman Produk</span>
                <span class="info-box-number">Jumlah Produk: {{ $sum_total }}</span>
                <a href="{{ route('superadmin.produk') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
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
<script src="{{ asset('template_admin/dist/js/demo.js') }}"></script>
<script>
$(function(){
  'use strict'
  var pieData = [{
    name: 'Produk',
    type: 'pie',
    radius: '60%',
    center: ['50%', '55%'],
    data: <?php echo json_encode($Data); ?>,
    label: {
      normal: {
        fontFamily: 'tahoma, sans-serif',
        fontSize: 12
      }
    },
    labelLine: {
      normal: {
        show: false
      }
    },
    markLine: {
      lineStyle: {
        normal: {
          width: 1
        }
      }
    }
  }];
  var pieOption = {
    tooltip: {
      trigger: 'item',
      formatter: '{a} <br/>{b}: {c} ({d}%)',
      textStyle: {
        fontSize: 11,
        fontFamily: 'Roboto, sans-serif'
      }
    },
    legend: {},
    series: pieData
  };
  var pie = document.getElementById('chartPie');
  var pieChart = echarts.init(pie);
  pieChart.setOption(pieOption);
});
</script>
@endsection

