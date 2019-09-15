@extends('layer.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Hotel detail<small></small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> hotel </a></li>
            <li class="active"> edit detail</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
        <div align="right">

        <button class="btn btn-success btn-sm" id="add_data" name="add" type="button">
            Edit hotel details
        </button>
    </div>
    <br>
        <div class="row">
    <div class="col-md-12">
        <form action="" enctype="multipart/form-data" method="post" role="form">
            @csrf
             <div class="panel panel-default">
            <div class="panel-heading"> Edit </div>
                <input hidden="hidden" name="id" type="text" value="{{ $hotel->id_if }}">
                   <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="text" class="control-label"></label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input class="form-control" name="name" placeholder="Name" type="text" value="{{ $hotel_name->hotel_name }}">
                    </div>
                     <p class="help-block"></p>
                </div>
            </div>



<div class="row">
    <div class="col-xs-12 form-group">
        <label for="photo" class="control-label">Photo 1</label>
        <br> <a data-toggle="modal" data-target="#myModal"><img height="50px" src="{{ URL::to('/') }}/images/{{ $hotel->img }} " with="100px"></a>
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img  src=" {{ URL::to('/') }}/images/{{ $hotel->img }} " height="600" width="700" >
        </div>
    </div>
  </div>
</div>
        <input class="form-control" style="margin-top: 4px;" name="image" type="file" id="photo">
        <p class="help-block"></p>
    </div>

</div>
<div class="row">
    <div class="col-xs-12 form-group">
        <label for="photo" class="control-label">Photo 2</label>
        <br> <a data-toggle="modal" data-target="#myModal"><img height="50px" src="{{ URL::to('/') }}/images/{{ $hotel->img1 }} " with="100px"></a>
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img  src="{{ URL::to('/') }}/images/{{ $hotel->img1 }}" height="600" width="700" >
        </div>
    </div>
  </div>
</div>
        <input class="form-control" style="margin-top: 4px;" name="image1" type="file" id="photo">
        <p class="help-block"></p>
    </div>

</div>
<div class="row">
    <div class="col-xs-12 form-group">
        <label for="photo" class="control-label">Photo 3</label>
        <br> <a data-toggle="modal" data-target="#myModal"><img height="50px" src="{{ URL::to('/') }}/images/{{ $hotel->img2 }}" with="100px"></a>
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img  src="{{ URL::to('/') }}/images/{{ $hotel->img2 }}" height="600" width="700" >
        </div>
    </div>
  </div>
</div>
        <input class="form-control" style="margin-top: 4px;" name="image2" type="file" id="photo">
        <p class="help-block"></p>
    </div>

</div>




               <div class="row">
    <div class="col-xs-12 form-group">
        <label for="photo" class="control-label"> Overview</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-map-o"></i>
                        </span>
                        <input class="form-control" name="address" placeholder="Enter ..." type="text" value="  {{ $hotel->overview }}">
                    </div>
                </div>
            </div><div class="row">
    <div class="col-xs-12 form-group">
        <label for="photo" class="control-label"> service</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-map-o"></i>
                        </span>
                        <input class="form-control" name="address" placeholder="Enter ..." type="text" value=" {{ $hotel->service }}">
                    </div>
                </div>
            </div>

                    <div class="box-body pad">
                        <label class="control-label">restaurant</label>
                        <textarea cols="80" id="editor1" name="describ" rows="10">
                            {{ $hotel->restaurant}}
                        </textarea>
                    </div>

                   


            <!-- /.box-body -->
            <div class="box-footer">
                <button class="btn btn-primary" type="submit">
                    Submit
                </button>
                <button class="btn btn-danger" type="cancel">
                    cancel
                </button>
            </div>
        </form>
    </div>
</div>
        <script src="{{ asset('bower_components/ckeditor/ckeditor.js') }}">
        </script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}">
        </script>
        <script>
            $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
   CKEDITOR.replace( 'editor1', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
        </script>
        @include('layer.edit')
        <!-- jQuery 3 -->
        @endsection
    </section>
</div>
