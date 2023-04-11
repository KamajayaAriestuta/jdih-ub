@extends('admin.layouts.base')

@section('title', 'Admin')
@section ('content')
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
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $sum_universitas }}</h3>

          <p>Produk Universitas</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <div class="row">
    <div class="col-lg-6 col-12">
      <div class="small-box bg-white ">
      <div id="chartPie" class="p-3" style="height: 350px;"></div>
      </div>
    </div>
    <div class="col-lg-6 col-6">
      <h3 class="text-orange text-center m-3">------ Admin Access ------</h3>
      <button class="col-lg-12 btn-lg btn btn-danger mb-2 p-3">Approve Pemohon</button>
      <button class="col-lg-12 btn-lg btn btn-secondary mb-2 p-3">Notifikasi</button>
      <button class="col-lg-12 btn-lg btn btn-warning mb-2 p-3">Unit Kerja</button>
      <button class="col-lg-12 btn-lg btn btn-info mb-2 p-3">Halaman Data</button>
    </div>
  </div>
  <div class="col-md-12">
    <h1 class="text-center">How To Create Dynamic Bar Chart In Laravel - techsolutionstuff.com </h1>
      <div class="col-md-8 col-md-offset-2">
        <div class="col-xl-6">
          <div class="card">
            <div class="card-body">
              <div class="chart-container">
                <div class="chart has-fixed-height" id="bars_basic"></div>
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
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>	
<script type="text/javascript" src="{{asset('assets/js/echarts.min.js')}}"></script>
<script>
$(function(){
  'use strict'
 
  /**************** PIE CHART ************/
  var pieData = [{
    name: 'Fruits',
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

var bars_basic_element = document.getElementById('bars_basic');
if (bars_basic_element) {
    var bars_basic = echarts.init(bars_basic_element);
    bars_basic.setOption({
        color: ['#3398DB'],
        tooltip: {
            trigger: 'axis',
            axisPointer: {            
                type: 'shadow'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis: [
            {
                type: 'category',
                data: ['Fruit', 'Vegitable','Grains'],
                axisTick: {
                    alignWithLabel: true
                }
            }
        ],
        yAxis: [
            {
                type: 'value'
            }
        ],
        series: [
            {
                name: 'Total Products',
                type: 'bar',
                barWidth: '20%',
                data: [
                    {{$fruit_count}},
                    {{$veg_count}}, 
                    {{$grains_count}}
                ]
            }
        ]
    });
}
</script>

@endsection