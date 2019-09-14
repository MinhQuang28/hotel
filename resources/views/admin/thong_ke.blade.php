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
    </section>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'thành công', 'đã huỷ', 'Tổng hoá đơn tháng',  'tỉ lệ '],
            ['01',  {{ $hoadon['bill_done']['8'] }},     6,        6,            3.6],
          ['02',  5,      4,        6,                  6],
          ['03',  5,      2,        6,                  3],
          ['04',  5,      3,        12,               9.4],
          ['05',  {{ $hoadon['bill_done']['8'] }},     6,        6,            3.6],
          ['06',  5,      4,        6,                  6],
          ['07',  5,      2,        6,                  3],
          ['08',  5,      3,        12,               9.4],
          ['09',  5,      1,         13,              9.6],
          ['10',  5,      4,        6,                  6],
          ['11',  5,      2,        6,                  3],
          ['12',  5,      3,        12,               9.4]
          
        ]);

        var options = {
          title : 'thống kê hoá đơn theo năm',
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
          ['month', 'Đăng kí'],
          ['01',  1000    ],
          ['02',  1170    ],
          ['03',  660   ],
        ['04',  1000  ],
          ['05',  1170    ],
          ['06',  660   ],
           ['07',  1000    ],
          ['08',  1170    ],
          ['09',  660   ],
          ['10',  1030   ], 
          ['11',  660   ],
          ['12',  1030   ]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
      }
    </script>

@endsection
