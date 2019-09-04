
@extends('layer.master')
@section('content')
<style type="text/css">
    button.btn.btn-success.btn-sm {
    float: left;
}
</style>
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Page Header
            <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
     <div class="row">
        <div class="col-xs-3 form-group">
          {{--   <label>Hotel</label> --}}
          <select data-column="1" class="form-control filter-select">
            <option value="">--select to hotel--</option>
            @foreach ($hotel as $hotel2)
            <option value="{{ $hotel2->hotel_name }}">{{ $hotel2->hotel_name }}</option>
            @endforeach
        </select>

    </div>
    <div class="col-xs-offset-10" align="right"> 
        <button type="button" name="add" id="add_data" class="btn btn-success">Add</button>
    </div>
</div>



<br>

<table id="student_table" class="table table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Hotel</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    </tbody>

    
</table>
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
                    <input type="text" name="name" id="first_name" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Select Hotel</label>
                    <select name="hotel_id" id="hotel_id" class="form-control">
                        @foreach ($hotel as $hotel1)
                        <option value="{{ $hotel1->hotel_id }}">{{ $hotel1->hotel_name }}</option>
                        @endforeach
                        
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Enter Price</label>
                    <input type="text" name="price" id="last_name" class="form-control" />
                </div>
                 <div class="form-group">
                    <label>Enter guest</label>
                    <input type="number" name="guest" id="guest" class="form-control" />
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


<script type="text/javascript">
    $(document).ready(function() {

      var table= $('#student_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('type.getdata') }}",
        "columns":[
        { "data": "type_id" },
        { "data": "hotel_name" },
        { "data": "type_name" },
        { "data": "price" , render: $.fn.dataTable.render.number( ',', '.', 3, ' $' )},
        { "data": "action", orderable:false, searchable: false}
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
            url:"{{ route('type.postdata') }}",
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
            url:"{{route('type.fetchdata')}}",
            method:'get',
            data:{id:id},
            dataType:'json',
            success:function(data)
            {
                $('#first_name').val(data.name);
                $('#last_name').val(data.price);
                $('#guest').val(data.bed);
                $('#hotel_id').val(data.hotel).change();
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
                url:"{{route('type.removedata')}}",
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

      $(function(){
        $("#selectdd").change(function() {
            /* Act on the event */
            var display=$("#selectdd option:selected").text();
            $(".form-control.input-sm").val(display);
        })
    });


      $('.hotel1').removeClass('hotel1').addClass('active');

  });
</script>
@endsection
