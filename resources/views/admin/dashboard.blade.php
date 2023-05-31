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
            <h3>{{ $sum_nasional }}</h3>
            <p>Produk Nasional</p>
          </div>
          <div class="icon">
            <i class="fas fa fa-university"></i>
          </div>
          <a href="{{ route('admin.produk.nasional') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
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
          <a href="{{ route('admin.produk.daerah') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
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
          <a href="{{ route('admin.produk.universitas') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
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
          <a href="{{ route('admin.produk') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-12">
      <div class="small-box bg-white">
      <div id="chartPie" class="p-3" style="height: 370px;"></div>
      </div>
    </div>
    <div class="col-lg-6 col-6">
      <div class="row">
        <div class="col-md-12 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Status Pemohon</span>
              <a href="{{ route('approved') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-success"><i class="far fa fa-envelope"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Notifikasi</span>
              <a href="{{ route('pemohon.notify') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="far fa-files-o"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Produk</span>
              <a href="{{ route('admin.produk') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-secondary"><i class="far fa-building"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Unit Kerja</span>
              <a href="{{ route('admin.unit_kerja') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">
        <i class="far fa-chart-bar"></i>
        Tabel Produk per Tahun
      </h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div id="bar-chart" style="height: 300px;"></div>
    </div>
    <!-- /.card-body-->
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

<script>

    var bar_data = {
      data: [
        [1, <?php echo json_encode($tahun_2018); ?>],
        [2, <?php echo json_encode($tahun_2019); ?>],
        [3, <?php echo json_encode($tahun_2020); ?>],
        [4, <?php echo json_encode($tahun_2021); ?>],
        [5, <?php echo json_encode($tahun_2022); ?>],
        [6, <?php echo json_encode($tahun_2023); ?>]
      ],
      bars: { show: true }
    };
      $.plot('#bar-chart', [bar_data], {
        grid  : {
          borderWidth: 1,
          borderColor: '#f3f3f3',
          tickColor  : '#f3f3f3'
        },
        series: {
           bars: {
            show: true, barWidth: 0.5, align: 'center',
          },
        },
        colors: ['#ff5e14'],
        xaxis : {
          ticks: [[1,'2018'], [2,'2019'], [3,'2020'], [4,'2021'], [5,'2022'], [6,'2023']]
        }
      })
  </script>


@endsection

