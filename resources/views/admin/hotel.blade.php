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
                hotel
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
            <a href="{{ route('hotel.add') }}" class="btn btn-success btn-sm" id="add_data" name="add" type="button">
                Add Hotel
            </a>
        </div>
        <br/>
        <table class="table table-bordered" id="hotel_table" style="width:100%">
            <thead>
                <tr>
                    <th>
                        Hotel Id
                    </th>
                    <th>
                        Hotel Name
                    </th>
                    <th>
                        address
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
        </table>
    </section>
</div>
<div class="modal fade" id="studentModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="hotel_form" method="post">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">
                        ×
                    </button>
                    <h4 class="modal-title">
                        Add Data
                    </h4>
                </div>
                <div class="modal-body">
                    {{csrf_field()}}
                    <span id="form_output">
                    </span>
                    <div class="form-group">
                        <label>
                            Enter Name Hotel
                        </label>
                        <input class="form-control" id="name" name="name" type="text"/>
                    </div>
                    <div class="form-group">
                        <label>
                            Enter adress
                        </label>
                        <input class="form-control" id="address" name="address" type="text"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <input id="button_action" name="button_action" type="hidden" value="insert"/>
                    <input class="btn btn-info" id="action" name="submit" type="submit" value="Add"/>
                    <button class="btn btn-default" data-dismiss="modal" type="button">
                        Close
                    </button>
                </div>
            </form>
        </div>
    </div>
    @push('js')
    <script type="text/javascript">
        $(document).ready(function() {
         $('#hotel_table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('hotel.getdata') }}",
            "columns":[
            { "data": "hotel_id" },
            { "data": "hotel_name" },
            { "data": "hotel_address" },
            // { "data": "action1" },
            { "data": "action", orderable:false, searchable: false}
            ]
        });

        

     });
        $(document).ready(function() {
            $('.hotel').removeClass('hotel').addClass('active');
        });
    </script>
    @endpush
    @endsection
</div>