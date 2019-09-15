@extends('layer.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            admin
            <small>Management</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"> <i class="fa fa-dashboard"> </i> home</a></li>
            <li class="active">admin</li>
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

        <button class="btn btn-success btn-sm" id="add_data" name="add" type="button">
            Add
        </button>
    </div>
    <br/>
    <table class="table table-bordered table-hover" id="student_table" style="width:100%">
        <thead>
            <tr>
                <th align="center">Name</th>
                <th>Email</th>
                <th>SDT </th>
                <th>Message</th>
                <th>Create at</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</section>
</div>
<div id="studentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="student_form">
                <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Add Data</h4>
             </div>
             <div class="modal-body">
                {{csrf_field()}}
                <span id="form_output"></span>
                <div class="form-group">
                    <label>Enter Name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Enter Email</label>
                    <input type="text" name="email" id="email" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Enter Password</label>
                    <input class="form-control" id="password" name="password" type="password"/>
                </div> 
                <div class="form-group">
                    <label>Gender</label>
                    <br>
                    Nam<input type="radio" name="gender" value="1" class="minimal" checked>
                    Nữ <input type="radio" name="gender"value="0" class="minimal">
                </div>
                <div class="form-group">
                    <label>Enter Birthday</label>
                    <input class="form-control" id="birth" name="birth" placeholder="" type="date"/>
                </div>
                <div class="form-group">
                    <label>Enter SDT</label>
                    <input class="form-control" id="SDT" name="SDT" placeholder="" type="text"/>
                </div>

            </div>
            <div class="modal-footer">
               <input type="hidden" name="id" id="student_id" value="" />
               <input type="hidden" name="button_action" id="button_action" value="insert" />
               <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           </div>
       </form>
   </div>
</div>


@push('js')
<script type="text/javascript">
    $(document).ready(function() {
     $('#student_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('feed_back') }}",
        "columns":[
        { "data": "name" },
        { "data": "email" },
        { "data": "phone" },
        { "data": "mes" },
            { "data": "create_at"},
            { "data": "action",orderable:false, searchable: false}
            ]
        });



     $('#add_data').click(function(){
        $('#studentModal').modal('show');
        $('#student_form')[0].reset();
        $('#form_output').html('');
        $('#button_action').val('insert');
        $('#action').val('Add');
        $('.modal-title').text('Add Data');
    });

    //  $('#student_form').on('submit', function(event){
    //     event.preventDefault();
    //     var form_data = $(this).serialize();
    //     $.ajax({
    //         url:"{{ route('user.postdata') }}",
    //         method:"POST",
    //         data:form_data,
    //         dataType:"json",
    //         success:function(data)
    //         {
    //             if(data.error.length > 0)
    //             {
    //                 var error_html = '';
    //                 for(var count = 0; count < data.error.length; count++)
    //                 {
    //                     error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
    //                 }
    //                 $('#form_output').html(error_html);
    //             }
    //             else
    //             {
    //                 $('#form_output').html(data.success);
    //                 $('#student_form')[0].reset();
    //                 $('#action').val('Add');
    //                 $('.modal-title').text('Add Data');
    //                 $('#button_action').val('insert');
    //                 $('#student_table').DataTable().ajax.reload();
    //             }
    //         }
    //     })
    // });


     $(document).on('click', '.edit', function(){
        var id = $(this).attr("id");
        $('#studentModal').modal('show');
        $('#form_output').html('');
        $.ajax({
            url:"{{route('fetchdata_feed_back')}}",
            method:'get',
            data:{id:id},
            dataType:'json',
            success:function(data)
            {
                $('#name').val(data.name);
                $('#status').val(data.status).change();
                $('#type').val(data.type).change();
                $('#student_id').val(id);
                $('#studentModal').modal('show');
                $('#action').val('Edit');
                $('.modal-title').text('Edit Data');
                $('#button_action').val('update');
            }
        })
    });

 });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.feed_back').removeClass('feed_back').addClass('active');

});
</script>
@endpush

@endsection
</div>