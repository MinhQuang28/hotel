
@extends('layer.master')
@section('content')
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Customer
                <small> Managemnet </small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> home</a></li>
                <li class="active">Customer</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">


    <div align="right">
        <button type="button" name="add" id="add_data" class="btn btn-success btn-sm">Add</button>
    </div>
    <table id="student_table" class="table table-bordered table-hover" style="width:100%">
        <thead>
            <tr>
                <th> Name</th>
                <th> Email</th>
                <th> brith</th>
                <th> access</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>


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
                        <label>Enter email</label>
                        <input type="text" name="email" id="email" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                     <input type="hidden" name="id" id="id" value="" />
                    <input type="hidden" name="button_action" id="button_action" value="insert" />
                    <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


@push('js')
   <script type="text/javascript">
$(document).ready(function() {
     $('#student_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('customer.getdata') }}",
        "columns":[
            { "data": "name" },
            {"data": "email"},
            { "data": "birth" },
            { "data": "access" },
            { "data": "action", orderable:false, searchable: false}
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

    $('#student_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url:"{{ route('customer.postdata') }}",
            method:"POST",
            data:form_data,
            dataType:"json",
            success:function(data)
            {
                if(data.error.length > 0)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                    }
                    $('#form_output').html(error_html);
                }
                else
                {
                    $('#form_output').html(data.success);
                    $('#student_form')[0].reset();
                    $('#action').val('Add');
                    $('.modal-title').text('Add Data');
                    $('#button_action').val('insert');
                    $('#student_table').DataTable().ajax.reload();
                }
            }
        })
    });


    $(document).on('click', '.delete', function(){
        var id = $(this).attr('id');
        if(confirm("Are you sure you want to Delete this data?"))
        {
            $.ajax({
                url:"{{route('customer.removedata')}}",
                mehtod:"get",
                data:{id:id},
                success:function(data)
                {
                    alert(data);
                    $('#student_table').DataTable().ajax.reload();
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
            $('.cus').removeClass('cus').addClass('active');
        });

</script>
@endpush
@endsection

