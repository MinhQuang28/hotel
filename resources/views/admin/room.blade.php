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



     <div class="row">
        <div class="col-xs-2 form-group">
          {{--   <label>Hotel</label> --}}
          <select data-column="3" class="form-control filter-select">
            <option value="" >--Select Hotel--</option>
            @foreach ($hotel as $hotel1)

            <option value="{{ $hotel1->hotel_name }}">{{  $hotel1->hotel_name }}</option>
            @endforeach
        </select>

    </div>

    <div class="col-xs-2 form-group">
      {{--   <label>Hotel</label> --}}
      <select data-column="4" class="form-control filter-select">
        <option value="">--Select type Room--</option>
        @foreach ($type as $type1)

        <option value="{{ $type1->type_name }}">{{ $type1->type_name }}</option>
        @endforeach
    </select>
</div>
<div class="col-xs-offset-10" align="right">
    <button type="button" name="add" id="add_data" class="btn btn-success btn-sm">Add Room</button>
</div>
</div>
<br/>
<table class="table table-bordered table-hover" id="student_table" style="width:100%">
    <thead>
        <tr>
            <th>ID Room</th>
            <th>Name</th>
            <th>Status</th>
            <th>Hotel Name</th>
            <th>Type Room</th>
            <th>Action</th>
        </tr>
    </thead>
</table>
</section>
</div>
<div class="modal fade" id="studentModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="student_form" method="post">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                    <h4 class="modal-title">
                        Add Data
                    </h4>
                </div>
                <div class="modal-body">
                    @csrf
                    <span id="form_output">
                    </span>
                    <div class="form-group">
                        <label>Enter Name Room</label>
                        <input class="form-control" id="name" name="name" type="text"/>
                    </div>

                    <div class="form-group">
                        <label>Select Status</label>
                        <select name="status" id="status" class="form-control">

                           <option value="0">Emtry</option>
                           <option value="1">Not Emtry</option>



                       </select>
                   </div>
                   <div class="form-group">
                    <label>Select Type</label>
                    <select class="form-control select2" name="type" id="type" style="width: 100%;">
                       @foreach ($type as $type)
                       <option value="{{ $type->type_id}}">{{ $type->type_name }}</option>
                       @endforeach
                   </select>
               </div>



           </div>

           <div class="modal-footer">
               <input type="hidden" name="id" id="student_id" value="" />
               <input id="button_action" name="button_action" type="hidden" value="insert"/>
               <input class="btn btn-info" id="action" name="submit" type="submit" value="Add"/>
               <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
           </div>
       </form>
   </div>
</div> 
@push('js')
<script type="text/javascript">
    $(document).ready(function() {
     var table=$('#student_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('room.getdata') }}",
        "columns":[
        { "data": "room_id" },
        { "data": "room_name" },
        { "data": "room_status" },
        { "data": "hotel_name"},
        { "data": "type_name"},
        { "data": "action",orderable:false, searchable: false}
        ]
    });
     $('.filter-select').change(function(){ 
        table.column($(this).data('column'))
        .search($(this).val())
        .draw();
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
            url:"{{ route('room.postdata') }}",
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
     $(document).on('click', '.edit', function(){
        var id = $(this).attr("id");
        $('#studentModal').modal('show');
        $('#form_output').html('');
        $.ajax({
            url:"{{route('room.fetchdata')}}",
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



     $(document).on('click', '.delete', function(){
        var id = $(this).attr('id');
        if(confirm("Are you sure you want to Delete this data?"))
        {
            $.ajax({
                url:"{{route('room.removedata')}}",
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
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.hotel2').removeClass('hotel2').addClass('active');
});
</script>
@endpush


@endsection
</div>