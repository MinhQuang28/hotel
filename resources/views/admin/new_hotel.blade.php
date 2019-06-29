@extends('layer.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Hotel Edit<small></small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Hotel </a></li>
            <li class="active"> New</li>
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
        <div class="row">
    <div class="col-md-12">
        <form action="{{ route('hotel.process_insert') }}" enctype="multipart/form-data" method="post" role="form">
            @csrf
             <div class="panel panel-default">
            <div class="panel-heading"> New Hotel </div>
                
                   <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="text" class="control-label">Name Hotel</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input class="form-control" name="name" placeholder="Name" type="text" value="">
                    </div>
                     <p class="help-block"></p>
                </div>
            </div>



<div class="row">
    <div class="col-xs-12 form-group">
        <label for="photo" class="control-label">Photo 1</label>
        <input class="form-control" style="margin-top: 4px;" name="image1" type="file" id="photo">
        <p class="help-block"></p>
    </div>

</div>
<div class="row">
    <div class="col-xs-12 form-group">
        <label for="photo" class="control-label">Photo 2</label>
        
        <input class="form-control" style="margin-top: 4px;" name="image2" type="file" id="photo">
        <p class="help-block"></p>
    </div>

</div>
<div class="row">
    <div class="col-xs-12 form-group">
        <label for="photo" class="control-label">Photo 3</label>
        <br>
        
        <input class="form-control" style="margin-top: 4px;" name="image3" type="file" id="photo">
        <p class="help-block"></p>
    </div>

</div>


               <div class="row">
    <div class="col-xs-12 form-group">
        <label for="photo" class="control-label"> Hotel Adress</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-map-o"></i>
                        </span>
                        <input class="form-control" name="address" placeholder="Enter ..." type="text" value=" ">
                    </div>
                </div>
            </div>

                    <div class="box-body pad">
                        <textarea cols="80" id="editor1" name="describ" rows="10">
                           
                        </textarea>
                    </div>

                   


            <!-- /.box-body -->
            <div class="box-footer">
                <button class="btn btn-primary" type="submit">
                    Submit
                </button>
                <a href="{{ url()->previous() }}" class="btn btn-danger" type="cancel">
                    cancel
                </a>
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
