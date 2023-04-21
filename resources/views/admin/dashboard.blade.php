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


  <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $sum_nasional }}</h3>

            <p>Produk Nasional</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{ route('admin.data.nasional') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $sum_daerah }}</h3>

            <p>Produk Daerah</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{ route('admin.data.daerah') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3>{{ $sum_universitas }}</h3>
            <p>Produk Universitas</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{ route('admin.data.universitas') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $sum_total }}</h3>

            <p>Total Produk</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="{{ route('admin.data') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
  </div>
  <div class="row">
    <div class="col-lg-6 col-12">
      <div class="small-box bg-white">
      <div id="chartPie" class="p-3" style="height: 350px;"></div>
      </div>
    </div>
    <div class="col-lg-6 col-6">
      <div class="small-box bg-white p-4">
      <h3 class="text-orange text-center mb-2">------ Akses Admin ------</h3>
      <a href="{{ route('approved') }}"><button class="col-lg-12 btn-lg btn btn-danger mb-2 p-3">Status Pemohon</button></a>
      <a href="{{ route('pemohon.notify') }}"><button class="col-lg-12 btn-lg btn btn-secondary mb-2 p-3">Notifikasi</button></a>
      <a href="{{ route('admin.unit_kerja') }}"><button class="col-lg-12 btn-lg btn btn-success mb-2 p-3">Unit Kerja</button></a>
      <a href="{{ route('admin.data') }}"><button class="col-lg-12 btn-lg btn btn-info mb-2 p-3">Halaman Data</button></a>
      </div>
    </div>
  </div>
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">
        <i class="far fa-chart-bar"></i>
        Tabel Data per Tahun
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
    radius: '80%',
    center: ['50%', '57.5%'],
    data: <?php echo json_encode($Data); ?>,
    label: {
      normal: {
        fontFamily: 'Roboto, sans-serif',
        fontSize: 11
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
   /** making all charts responsive when resize **/
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

