@extends('layer.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Customer Edit<small></small></h1>
        <ol class="breadcrumb">
            <li>
                <a href="#"><i class="fa fa-dashboard"> </i>Customer</a>
            </li>
            <li class="active">edit</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('customer.process_update') }}" enctype="multipart/form-data">
             @csrf
             <div class="panel panel-default">
                <div class="panel-heading"> Edit </div>
                <input type="text" hidden="hidden" name="id" value="{{ $customer->id }}">
                <div class="panel-body">

                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label for="text" class="control-label">Name</label>
                            <div class="input-group">
                               <span class="input-group-addon">
                                   <i class="fa fa-user"></i>
                               </span>
                               <input class="form-control" placeholder="Name" value="{{ $customer->name }}" type="text" name="name">
                           </input>
                       </div>
                       <p class="help-block"></p>
                   </div>
               </div>
               <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="email" class="control-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope">
                            </i>
                        </span>
                        <input class="form-control" placeholder="Email" type="email" value="{{ $customer->email }}" name="email">
                    </input>
                </div>
                <p class="help-block"></p>
            </div>
        </div>
        <div class="row">
                <div class="col-xs-12 form-group">
                    <label for="phone" class="control-label">Phone</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope">
                            </i>
                        </span>
                        <input class="form-control" placeholder="Phone" type="phone" value="{{ $customer->phone }}" name="phone">
                    </input>
                </div>
                <p class="help-block"></p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 form-group">
                <label for="password" class="control-label">Password</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user-secret">
                        </i>
                    </span>
                    <input class="form-control" placeholder="password" type="password" value="{{ $customer->pass }}" name="pass">
                </input>
            </div>
        </div>
        <p class="help-block"></p>
    </div>

    <div class="row">
        <div class="col-xs-12 form-group">
            <label for="radi0" class="control-label">Gender</label>
            Male<input  class="minimal" name="gender"
            @if ($customer->gender==1)

            checked="checked"
            @endif
            type="radio" value="1">
        </input>
        Female<input class="minimal" name="gender"
        @if ($customer->gender==0)
        
        checked="checked"
        @endif
        type="radio" value="0">
    </input>
    <p class="help-block"></p>
</div>
</div>
<div class="row">
    <div class="col-xs-12 form-group">
        <label for="date" class="control-label">Date</label>
        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input class="form-control pull-right" placeholder="date" id="datepicker" type="text" value="{{ $customer->birth }}" name="birth">
        </input>
    </div>
    <p class="help-block"></p>
</div>
</div>
 <div class="row">
                        <div class="col-xs-12 form-group">
                            <label for="text" class="control-label">Address</label>
                            <div class="input-group">
                               <span class="input-group-addon">
                                   <i class="fa fa-user"></i>
                               </span>
                               <input class="form-control" placeholder="Address" value="{{ $customer->address }}" type="text" name="address">
                           </input>
                       </div>
                       <p class="help-block"></p>
                   </div>
               </div>
               <div class="row">
    <div class="col-xs-12 form-group">
        <label for="monney" class="control-label"> Status:</label>
        <div class="form-group">
            online
            <input  class="minimal-red" name="access" value="1" type="radio"
            @if ($customer->access==1)
            {{-- expr --}}
            checked="checked"
            @endif
            >
        </input>


        offline
        <input class="minimal-red" name="access" value="0" type="radio"
        @if ($customer->access==0)
        {{-- expr --}}
        checked="checked"
        @endif
        >
    </input>
</div>
<p class="help-block"></p>
</div>
</div>
<div class="row">
    <div class="col-xs-12 form-group">
        <label for="photo" class="control-label">Avatar User</label>
        <br> <a data-toggle="modal" data-target="#myModal"><img height="50px" src="{{ URL::to('/') }}/images/{{ $customer->avatar_user }}" with="100px"></a>
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img  src="{{ URL::to('/') }}/images/{{ $customer->avatar_user }}" height="600" width="700" >
        </div>
    </div>
  </div>
</div>
        <input class="form-control" style="margin-top: 4px;" name="avatar_user" type="file" id="photo">
        <p class="help-block"></p>
    </div>

</div>





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
