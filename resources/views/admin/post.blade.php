@extends('layer.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Hotel
            <small>
                Mangement
            </small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard">
                    </i>
                    home
                </a>
            </li>
            <li class="active">
                post
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
        @if (session('messages'))
        <div class="callout callout-info">
            {{ session('messages') }}
        </div>
        @endif
        <div align="right">
            <a href="{{ route('post.view_add') }}"><button class="btn btn-success btn-sm" id="add_data" name="add" type="button">
                Add
            </button></a>
        </div>
        <br/>
        <table class="table table-bordered" id="post_table" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tiêu đề</th>
                    <th>Tác giả</th>
                    <th>Ngày tạo</th>
                    <th> Action</th>
                </tr>
            </thead>
        </table>
    </section>

   @push('js')
       <script type="text/javascript">
        $(document).ready(function() {
     $('#post_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('post.getdata') }}",
        "columns":[
            { "data": "id" },
            { "data": "title" },
            {"data":"author"},
            {"data":"create_at"},
            // { "data": "action1" },
            { "data": "action", orderable:false, searchable: false}
        ]
     });



    $(document).on('click', '.delete', function(){
        var id = $(this).attr('id');
        if(confirm("Are you sure you want to Delete this data?"))
        {
            $.ajax({
                url:"{{route('post.removedata')}}",
                mehtod:"get",
                data:{id:id},
                success:function(data)
                {
                    alert(data);
                    $('#post_table').DataTable().ajax.reload();
                }
            })
        }
        else
        {
            return false;
        }
    });

});
          $(document).ready(function() {
            $('.hotel3').removeClass('hotel3').addClass('active');
        });
    </script>
   @endpush
    @endsection
</div>

