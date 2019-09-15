@extends('layer.master')
@section('content')
 
  <div class="content-wrapper">
   
    <section class="content-header">
      <h1>
        Thống kê
        <small>Thống kê chi tiết</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Admin </a></li>
        <li class="active">Thống kê</li>
      </ol>
    </section>
 <form method="get">

 <div class="input-group col-xs-3">
             <select name="year" data-column="5" class="form-control filter-select">
            <option value="">--Select year--</option>
             <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            
        </select>
<span class="input-group-btn">
      <button type="submit"   id="search-btn" class="btn btn-flat form-group"><i class="fa fa-search"></i></button> 
       </span>
     </form>
      </div>
    <section class="content container-fluid">

    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $thong_ke['total_bill'] }}</h3>

              <p>Total Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href=" {{ url('admin.bill') }} " class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $thong_ke['total_money'] }}<sup style="font-size: 20px">$</sup></h3>

              <p>Total Monney</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $thong_ke['total_cus'] }}</h3>

              <p>User </p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $thong_ke['total_hotel'] }}</h3>

              <p>Total Hotel</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->


       <div id="chart_div" style="width: 100%; height: 400px; margin-top: 20px "></div>
<div id="chart_div1" style="width: 100%; height: 400px;"></div>
 <div id="piechart" style="width: 100%; height: 500px;"></div>
    </section>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'thành công', 'đã huỷ', 'Tổng hoá đơn tháng',  'Đơn hoàn thành/tổng hoá đơn'],
            ['01',  {{ $hoadon['bill_done']['1'] }},     {{ $hoadon['bill_cancel']['1'] }},        {{ $hoadon['total_bill1']['1'] }},            {{ $hoadon['bill_done']['1'] }}],
          ['02', {{ $hoadon['bill_done']['2'] }},    {{ $hoadon['bill_cancel']['2'] }},        {{ $hoadon['total_bill1']['2'] }},            {{ $hoadon['bill_done']['2'] }}],
          ['03',  {{ $hoadon['bill_done']['3'] }},     {{ $hoadon['bill_cancel']['3'] }},        {{ $hoadon['total_bill1']['3'] }},            {{ $hoadon['bill_done']['3'] }}],
          ['04',  {{ $hoadon['bill_done']['4'] }},     {{ $hoadon['bill_cancel']['4'] }},        {{ $hoadon['total_bill1']['4'] }},            {{ $hoadon['bill_done']['4'] }}],
          ['05',  {{ $hoadon['bill_done']['5'] }},     {{ $hoadon['bill_cancel']['5'] }},        {{ $hoadon['total_bill1']['5'] }},            {{ $hoadon['bill_done']['5'] }}],
          ['06',  {{ $hoadon['bill_done']['6'] }},     {{ $hoadon['bill_cancel']['6'] }},        {{ $hoadon['total_bill1']['6'] }},            {{ $hoadon['bill_done']['6'] }}],
          ['07',  {{ $hoadon['bill_done']['7'] }},     {{ $hoadon['bill_cancel']['7'] }},        {{ $hoadon['total_bill1']['7'] }},            {{ $hoadon['bill_done']['7'] }}],
          ['08',  {{ $hoadon['bill_done']['8'] }},     {{ $hoadon['bill_cancel']['8'] }},        {{ $hoadon['total_bill1']['8'] }},            {{ $hoadon['bill_done']['8'] }}],
          ['09',  {{ $hoadon['bill_done']['9'] }},     {{ $hoadon['bill_cancel']['9'] }},        {{ $hoadon['total_bill1']['9'] }},            {{ $hoadon['bill_done']['9'] }}],
          ['10',  {{ $hoadon['bill_done']['10'] }},     {{ $hoadon['bill_cancel']['10'] }},        {{ $hoadon['total_bill1']['10'] }},            {{ $hoadon['bill_done']['10'] }}],
          ['11',  {{ $hoadon['bill_done']['11'] }},     {{ $hoadon['bill_cancel']['11'] }},        {{ $hoadon['total_bill1']['11'] }},            {{ $hoadon['bill_done']['11'] }}],
          ['12',  {{ $hoadon['bill_done']['12'] }},     {{ $hoadon['bill_cancel']['12'] }},        {{ $hoadon['total_bill1']['12'] }},            {{ $hoadon['bill_done']['12'] }}]
          
        ]);

        var options = {
          title : 'Lịch hoá đơn theo tháng',
          vAxis: {title: 'số lượng'},
          hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {3: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
     <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Year'],
          ['thành công',     {{ $hoadon['total_bill_done'] }}],
          ['đã huỷ',    {{  $hoadon['bill_cancel_year'] }}]
        ]);

        var options = {
          title: 'Tỷ lệ bùng của khách hàng trong năm'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
 <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['month', 'Đăng kí mới'],
          ['01',  {{$cus['1']}}     ],
          ['02',  {{$cus['2']}}     ],
          ['03',  {{$cus['3']}}     ],
          ['04',  {{$cus['4']}}     ],
          ['05',  {{$cus['5']}}     ],
          ['06',  {{$cus['6']}}     ],
          ['07',  {{$cus['7']}}     ],
          ['08',  {{$cus['8']}}     ],
          ['09',  {{$cus['9']}}     ],
          ['10',  {{$cus['10']}}     ], 
          ['11',  {{$cus['11']}}     ],
          ['12',  {{$cus['12']}}     ]
        ]);

        var options = {
          title: 'Lịch sử tài khoản đăng kí mới theo tháng',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
      }
    </script>

@endsection
