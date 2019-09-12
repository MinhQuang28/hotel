@extends('layer.master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Bill Update<small></small></h1>
    <ol class="breadcrumb">
      <li>
        <a href="#"><i class="fa fa-dashboard"> </i>bill</a>
      </li>
      <li class="active">update</li>
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
                 <input class="form-control" placeholder="name" value="{{$bill->name }}" type="text" name="name">
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
                 <input class="form-control" placeholder="name" value="{{$bill->phone }}" type="text" name="phone">
               </input>
             </div>
             <p class="help-block"></p>
           </div>
         </div>
         <div class="row">
              <div class="col-xs-12 form-group">
                <label for="text" class="control-label">Email</label>
                <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-user"></i>
                 </span>
                 <input class="form-control" placeholder="name" value="{{$bill->email }}" type="text" name="email">
               </input>
             </div>
             <p class="help-block"></p>
           </div>
         </div>
         <div class="row">
              <div class="col-xs-12 form-group">
                <label for="text" class="control-label">total room</label>
                <div class="input-group">
                 <span class="input-group-addon">
                   <i class="fa fa-user"></i>
                 </span>
                 <input class="form-control" placeholder="name" value="{{$bill->so_luong }}" type="text" name="so_luong">
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
              <i class="fa fa-envelope">
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
     <input class="form-control" placeholder="Name" value="{{$bill->deposit }}" type="text" name="deposit">
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
      <input  class="minimal-red" name="status" value="1" type="radio">
      Check In
      <input class="minimal-red" name="status" value="0" type="radio" checked="checked">
      Thanh Toan
      <input class="minimal-red" name="status" value="0" type="radio" >

    </div>
    <p class="help-block"></p>
  </div>
</div>


{{--   @foreach ($room_id as $id)
<div class="row">
    <div class="col-xs-12 form-group">
        <label>Room {{ $id->room_id }}</label>
        <div class="input-group">
             <span class="input-group-addon">
              <i class="fa fa-home"></i>
            </span>
          
              
          
        <input type="text" class="form-control" value="{{ $id->room_name }}" placeholder="Room" ">
          
      </div>
           <p class="help-block"></p>
         </div>
       </div>
       @endforeach --}}

       @if ($bill->so_luong==1)
       <div class="row">
        <div class="col-xs-12 form-group">
          <label>Room 1</label>
          <div class="input-group">
           <span class="input-group-addon">
            <i class="fa fa-home"></i>
          </span>
          <select class="form-control" name="room1">
            @foreach ($room as $room21)
            <option value="{{ $room21->room_id }}"
             @if ($room1->room_id==$room21->room_id)
             selected="selected"
             @endif> 
             {{ $room21->room_name }}</option>
             @endforeach
           </select>
         </div>
         <p class="help-block"></p>
       </div>
     </div>
     @elseif($bill->so_luong==2)
     <div class="row">
      <div class="col-xs-12 form-group">
        <label>Room 1</label>
        <div class="input-group">
         <span class="input-group-addon">
          <i class="fa fa-home"></i>
        </span>
        <select class="form-control" name="room1">
          @foreach ($room as $room21)
          <option value="{{ $room21->room_id }}"
           @if ($room1->room_id==$room21->room_id)
           selected="selected"
           @endif > 
           {{ $room21->room_name }}</option>
           @endforeach
         </select>
       </div>
       <p class="help-block"></p>
     </div>
   </div>
   <div class="row">
    <div class="col-xs-12 form-group">
      <label>Room 2</label>
      <div class="input-group">
       <span class="input-group-addon">
        <i class="fa fa-home"></i>
      </span>
      <select class="form-control" name="room2">
        @foreach ($room as $room21)
        <option value="{{ $room21->room_id }}"
         @if ($room2->room_id==$room21->room_id)
         selected="selected"
         @endif > 
         {{ $room21->room_name }}</option>
         @endforeach
       </select>
     </div>
     <p class="help-block"></p>
   </div>
 </div>
 @elseif($bill->so_luong==3)
 <div class="row">
  <div class="col-xs-12 form-group">
    <label>Room 1</label>
    <div class="input-group">
     <span class="input-group-addon">
      <i class="fa fa-home"></i>
    </span>
    <select class="form-control" name="room1">
      @foreach ($room as $room21)
      <option value="{{ $room21->room_id }}"
       @if ($room1->room_id==$room21->room_id)
       selected="selected"
       @endif > 
       {{ $room21->room_name }}</option>
       @endforeach
     </select>
   </div>
   <p class="help-block"></p>
 </div>
</div>
<div class="row">
  <div class="col-xs-12 form-group">
    <label>Room 2</label>
    <div class="input-group">
     <span class="input-group-addon">
      <i class="fa fa-home"></i>
    </span>
    <select class="form-control" name="room2">
      @foreach ($room as $room21)
      <option value="{{ $room21->room_id }}"
       @if ($room2->room_id==$room21->room_id)
       selected="selected"
       @endif> 
       {{ $room21->room_name }}</option>
       @endforeach
     </select>
   </div>
   <p class="help-block"></p>
 </div>
</div>
<div class="row">
  <div class="col-xs-12 form-group">
    <label>Room 3</label>
    <div class="input-group">
     <span class="input-group-addon">
      <i class="fa fa-home"></i>
    </span>
    <select class="form-control" name="room3">
      @foreach ($room as $room21)
      <option value="{{ $room21->room_id }}"
       @if ($room3->room_id==$room21->room_id)
       selected="selected"
       @endif> 
       {{ $room21->room_name }}</option>
       @endforeach
     </select>
   </div>
   <p class="help-block"></p>
 </div>
</div>


@endif





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
