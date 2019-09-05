@extends('layer.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Edit post<small></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> admin </a></li>
                <li class="active"> edit</li>
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
                    <form action="{{ route('post.process_update') }}" enctype="multipart/form-data" method="post" role="form">
                        @csrf
                        <div class="panel panel-default">
                            <div class="panel-heading"> Create New  </div>
                            <input hidden="hidden" name="id" type="text" value="{{ $post->id }}">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12 form-group">
                                        <label for="text" class="control-label">Titile</label>
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-sticky-note"></i>
                                        </span>
                                            <input class="form-control" name="title" value="{{$post->title}}" placeholder="Enter title" type="text" >
                                        </div>
                                        <p class="help-block"></p>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-xs-12 form-group">
                                        <label for="photo" class="control-label">Photo 1</label>
                                        <br>
                                        <input class="form-control" style="margin-top: 4px;" name="image1" type="file" id="photo">
                                        <p class="help-block"></p>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-xs-12 form-group">
                                        <label for="photo" class="control-label">author</label>
                                        <input class="form-control"  type="text" name="author" value="{{$post->author}}">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 form-group">
                                        <label for="photo" class="control-label"> Url Post</label>


                                        <input class="form-control"  type="text" name="url_post" value="{{$post->url_post}}">
                                        <p class="help-block"></p>

                                    </div>
                                </div>

                                <div class="box-body pad">
                                <textarea cols="80" id="editor1" name="describ" rows="10">
                                {{$post->content}}
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
