
@extends('layer.master')
@section('content')
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
        <div class="col-xs-2 form-group">
          {{--   <label>Hotel</label> --}}
          <select data-column="5" class="form-control filter-select">
            <option value="">--Select Bill Action--</option>
            <option value="Chờ duyệt">Chờ duyệt</option>
            <option value="Đã duyệt">Đã duyệt</option>
            <option value="CheckIn">CheckIn</option>
            <option value="Chờ Thanh Toán">Thanh Toán</option>
            <option value="Đã Hủy">Đã Hủy</option>
            <option value="">Đã Xong</option>
        </select>
     
    </div>
     
        <div class="col-xs-2 form-group">
          {{--   <label>Hotel</label> --}}
          <select data-column="5" class="form-control filter-select">
            <option value="">--Select Hotel--</option>
            <option value="Chờ duyệt">Chờ duyệt</option>
            <option value="Henry Middleton">Cần Check In</option>
            <option value=" thanh toán">Cần thanh toán</option>
            <option value="Cần thanh toán">Đã Hủy</option>
            <option value="Cần thanh toán">Đã Thanh toán</option>
        </select>
    </div>
    <div class="col-xs-offset-10" align="right">
    <button type="button" name="add" id="add_data" class="btn btn-success btn-sm">Add BIll</button>
</div>
</div>


<br />
<table id="student_table" class="table table-bordered" style="width:100%">
    <thead>
        <tr>
           <th>ID Bill</th>
           <th>Customer</th>
           <th>Total Monney</th>
           <th>Check In</th>
           <th>Check Out</th>
           <th>Status</th>
           <th>Action</th>
       </tr>
   </thead>
</table>
</div>



<script type="text/javascript">
    $(document).ready(function() {
    var table= $('#student_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('bill.getdata') }}",
        "columns":[
        { "data": "bill_id" },
        { "data": "name" },
        { "data": "total_money" , render: $.fn.dataTable.render.number( ',', '.', 1, ' $' )},
        { "data": "check_in" },
        { "data": "check_out" },
        { "data": "status" },
        { "data": "action", orderable:false, searchable: false}
        ]
    });
      $('.filter-select').change(function(){ 
        table.column($(this).data('column'))
        .search($(this).val())
        .draw();
      });

    

     $(document).on('click', '.delete', function(){
        var id = $(this).attr('id');
        if(confirm("Are you sure you want to Cancel this order?"))
        {
            $.ajax({
                url:"{{route('bill.removedata')}}",
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
        $('.bill').removeClass('bill').addClass('active');
    });
</script>
@endsection
