@extends('layer.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Admin Edit<small></small></h1>
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
            <form method="POST" action="{{ route('user.process_update') }}" >
             @csrf
             <div class="panel panel-default">
                <div class="panel-heading"> Edit </div>
                <input type="text" hidden="hidden" name="id" value="{{ $admin->id }}">
                <div class="panel-body">

                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label for="text" class="control-label">Name</label>
                            <div class="input-group">
                               <span class="input-group-addon">
                                   <i class="fa fa-user"></i>
                               </span>
                               <input class="form-control" placeholder="Name" value="{{ $admin->name }}" type="text" name="name">
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
                        <input class="form-control" placeholder="Email" type="email" value="{{ $admin->email }}" name="email">
                    </input>
                </div>
                <p class="help-block"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <label for="email" class="control-label">Password</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user-secret">
                        </i>
                    </span>
                    <input class="form-control" placeholder="password" type="text" value="{{ $admin->pass }}" name="pass">
                </input>
            </div>
        </div>
        <p class="help-block"></p>
    </div>

    <div class="row">
        <div class="col-xs-12 form-group">
            <label for="radi0" class="control-label">Gender</label>
            nam<input  class="minimal" name="gender"
            @if ($admin->gender==1)

            checked="checked"
            @endif
            type="radio" value="1">
        </input>
        Nu<input class="minimal" name="gender"
        @if ($admin->gender==0)
        
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
            <input class="form-control pull-right" placeholder="date" id="datepicker" type="text" value="{{ $admin->birth }}" name="birth">
        </input>
    </div>
    <p class="help-block"></p>
</div>
</div>
<div class="row">
    <div class="col-xs-12 form-group">
        <label for="monney" class="control-label"> Status:</label>
        <div class="form-group">
            lock
            <input  class="minimal-red" name="status" value="1" type="radio"
            @if ($admin->status==1)
            {{-- expr --}}
            checked="checked"
            @endif
            >
        </input>


        unlock
        <input class="minimal-red" name="status" value="0" type="radio"
        @if ($admin->status==0)
        {{-- expr --}}
        checked="checked"
        @endif
        >
    </input>
</div>
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
