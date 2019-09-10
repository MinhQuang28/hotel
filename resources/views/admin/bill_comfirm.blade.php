@extends('layer.master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Bill Comfirm<small></small></h1>
    <ol class="breadcrumb">
      <li>
        <a href="#"><i class="fa fa-dashboard"> </i>admin</a>
      </li>
      <li class="active">edit</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content container-fluid">

    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('bill.process_update') }}" >
         @csrf
         <div class="panel panel-default">
          <div class="panel-heading"> Edit </div>
          <input type="text" hidden="hidden" name="id" value="{{ $bill->bill_id }}">
          <div class="panel-body">

            <div class="row">
              <div class="col-xs-12 form-group">
                <label for="text" class="control-label">Name Customer</label>
                <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-user"></i>
                 </span>
                 <input class="form-control" placeholder="Name" value="{{$bill->name }}" type="text" name="name">
               </input>
             </div>
             <p class="help-block"></p>
           </div>
         </div>   
            <div class="row">
              <div class="col-xs-12 form-group">
                <label for="text" class="control-label">Phone</label>
                <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-user"></i>
                 </span>
                 <input class="form-control" placeholder="Name" value="{{$bill->phone }}" type="text" name="phone">
               </input>
             </div>
             <p class="help-block"></p>
           </div>
         </div>            <div class="row">
              <div class="col-xs-12 form-group">
                <label for="text" class="control-label">email</label>
                <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-user"></i>
                 </span>
                 <input class="form-control" placeholder="Name" value="{{$bill->email }}" type="text" name="email">
               </input>
             </div>
             <p class="help-block"></p>
           </div>
         </div>
         <div class="row">
          <div class="col-xs-12 form-group">
            <label for="text" class="control-label">Hotel</label>
            <div class="input-group">
             <span class="input-group-addon">
              <i class="fa fa-building"></i>
            </span>
            <select class="form-control">
              <option selected="selected">--select--</option>
              @foreach ($hotel as $hotel)
              <option value="{{ $hotel->hotel_id }}" @if ($hotel->hotel_id==$bill->hotel_id)
               selected="selected" 
               @endif>{{ $hotel->hotel_name }}</option>
               @endforeach
             </select>
           </div>
           <p class="help-block"></p>
         </div>
       </div>
       <div class="row">
        <div class="col-xs-12 form-group">
          <label for="email" class="control-label">Total Money</label>
          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-money">
              </i>
            </span>
            <input class="form-control" placeholder="Email" type="text" value="{{ $bill->total_money }}" name="monney">
          </input>
        </div>
        <p class="help-block"></p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 form-group">
        <label for="date" class="control-label">check_in</label>
        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input class="form-control date" placeholder="date" id="" type="date" value="{{ $bill->check_in }}" name="check_in">
        </input>
      </div>
      <p class="help-block"></p>
    </div>
  </div><div class="row">
    <div class="col-xs-12 form-group">
      <label for="date" class="control-label">check_out</label>
      <div class="input-group date">
        <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
        </div>
        <input class="form-control date" placeholder="date" id="" type="date" value="{{ $bill->check_out }}" name="check_out">
      </input>
    </div>
    <p class="help-block"></p>
  </div>
</div>
<div class="row">
  <div class="col-xs-12 form-group">
    <label for="text" class="control-label">Deposit</label>
    <div class="input-group">
     <span class="input-group-addon">
       <i class="fa fa-user"></i>
     </span>
     <input class="form-control" placeholder="Name" value="{{$bill->deposit }}" type="text" name="name">
   </input>
 </div>
 <p class="help-block"></p>
</div>
</div>


<div class="row">
  <div class="col-xs-12 form-group">
    <label for="monney" class="control-label"> Status:</label>
    <div class="form-group">
      Hủy
      <input  class="minimal-red" name="status" value="4" type="radio">
      Duyệt
      <input class="minimal-red" name="status" value="1" type="radio" checked="checked">
    </input>
    Check_in<input class="minimal-red" name="status" value="3" type="radio">
  </div>
  <p class="help-block"></p>
</div>
</div>

<div class="row">
  <div class="col-xs-12 form-group">
    <label for="text" class="control-label">Total_room </label>
    <div class="input-group">
     <span class="input-group-addon">
       <i class="fa fa-home"></i>
     </span>
     <input class="form-control" placeholder="enter" value="{{$bill->so_luong }}" type="text" name="so_luong"
 </div>
 <p class="help-block"></p>
</div>
</div>

 @for ($i = 1; $i <=$bill->so_luong ; $i++)
<div class="row">
    <div class="col-xs-12 form-group">
        <label>Room {{ $i }}</label>
        <div class="input-group">
             <span class="input-group-addon">
              <i class="fa fa-home"></i>
            </span>
        <select class="form-control" name="room{{ $i }}">
          <option value=''>--chọn phòng-- </option>
          @foreach ($room1 as $room21)
           
            <option value="{{ $room21->room_id }}">{{ $room21->room_name }}</option>
          @endforeach
      </select>
      </div>
           <p class="help-block"></p>
         </div>
       </div>
@endfor 






<input class="btn btn-primary" type="submit" value="Save">
<button class="btn btn-danger" type="cancel">
  cancel
</button>
</div>
</form>
</div>
</div>



@include('layer.edit')
<!-- jQuery 3 -->
@endsection
