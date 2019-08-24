@extends('layer.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Admin<small>control pannel</small> </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"> </i>home</a>
            </li>

        </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
 
        @if (session('messages'))
        <div class="callout callout-info">
         {{ session('messages') }} {{Session::get('ten_admin')}}
     </div>
     @endif
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $bill }}</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{ $room }}<sup style="font-size: 20px"></sup></h3>

              <p>room emtry</p>
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
              <h3>{{ $cus }}</h3>

              <p>User Registrations</p>
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
              <h3>{{ $today }}</h3>

              <p>Bill paid</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>check in</th>
                    <th>check out</th>
                    <th>total money</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($result as $values)
                      <tr>
                    <td><a href="#">{{ $values->bill_id }}</a></td>
                    <td>{{ $values->name }}</td>
                    <td><span></span> {{ $values->check_in }}</td>
                    <td><span></span> {{ $values->check_out }}</td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">{{ $values->total_money }}</div>
                    </td>
                  </tr>
                    @endforeach 
                 
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
              <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.home').removeClass('home').addClass('active');

});
</script>
@include('layer.edit')
<!-- jQuery 3 -->
@endsection
