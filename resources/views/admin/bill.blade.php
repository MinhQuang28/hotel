
@extends('layer.master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Bill Manager
            <small>all bill</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> admin</a></li>
            <li class="active">bill</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
     <div class="row">   @if (session('messages'))
        <div class="callout callout-info">
         {{ session('messages') }}
     </div>
     @endif
        <div class="col-xs-2 form-group">
          {{--   <label>Hotel</label> --}}
          <select data-column="6" class="form-control filter-select">
            <option value="">--Select Bill Action--</option>
            <option value="Chờ duyệt">Chờ duyệt</option>
            <option value="Đã Duyệt">Đã duyệt</option>
            <option value="Đang sử dụng">Đang sử dụng</option>
            <option value="Thanh toán hôm nay"> Cần thanh toán</option>
            <option value="đã Hủy">Đã Hủy</option>
            <option value="Đã thanh toán">Đã thanh toán</option>
        </select>
     
    </div>
     
       
     

    <div class="col-xs-offset-10" align="right">
    <button type="button" name="add" id="add_data" class="btn btn-success btn-sm">Add BIll</button>
</div>



<br />
<table id="student_table" class="table table-bordered" style="width:100%">
    <thead>
        <tr>
           <th>ID</th>
           <th>Khách hàng</th>
           <th>SDT</th>
           <th>Tổng tiền</th>
           <th>ngày đặt</th>
           <th>Ngày trả</th>
           <th>Tình trạng</th>
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
        { "data": "phone" },
        { "data": "total_money" , render: $.fn.dataTable.render.number( ',', '.', 1, ' $' )},
        { "data": "check_in" },
        { "data": "check_out" },
        { "data": "status" },
        { "data": "action", orderable:false, searchable: false}
        ]
    });
      $('.filter-select').change(function(){ 
        
        console.log($(this).val());
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
