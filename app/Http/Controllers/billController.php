<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Validator;
use Yajra\Datatables\Datatables;
use App\Model\Bill;
use App\Model\Hotel;
use App\Model\Room;


class billController extends Controller {
	

	function index() {
		return view('admin.bill');
		
	}
	function Get_checkin(){
		
		dd($check_in);
		}
	function getdata() {
		date_default_timezone_set('Asia/Macau');
		$bill=new Bill();
		$bill=$bill->get_all();
		return Datatables::of($bill)
		->editColumn('check_in', function ($bill) {
				//change over here
			return date('d/m/Y', strtotime($bill->check_in));
		})
		->editColumn('check_out', function ($bill) {
				//change over here
			return date('d/m/Y', strtotime($bill->check_out));
		})
		->editColumn('status', function ($bill) {
				//change over here
			if ($bill->status==0) {
				return '<button class="btn btn-xs btn-warning"> Chờ duyệt</button>';
			}elseif ($bill->status==1 && $bill->check_in==date("Y-m-d")) {
				return '<button class="btn btn-xs btn-success">CheckIn</button>';
			}
			elseif ($bill->status==1) {
				return '<button class="btn btn-xs btn-success"> Đã duyệt</button>';
			}
			elseif ($bill->status==3) {
				return '<button class="btn btn-xs btn-info"> Chờ Thanh Toán</button>';
			}
			else {
				return '<button class="btn btn-xs btn-danger"> Đã Hủy</button>';
			}
		})
		->addColumn('action', function ($bill) {
			if ($bill->status==0) {
				return ' <div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action</button>
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
			</button>
			<ul class="dropdown-menu" role="menu">
			<li><a href="bill/check_in/' . $bill->bill_id . '">Duyệt</a></li>
		
			<li><a href="#"  class="delete" id="' . $bill->bill_id . '">Hủy</a></li>
			</ul>
			</div>';
		}elseif ($bill->status==3){
			return ' <div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action</button>
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
			</button>
			<ul class="dropdown-menu" role="menu">
			<li><a href="bill/update/' . $bill->bill_id . '">Thanh Toan</a></li>
			</ul>
			</div>';
		}elseif ($bill->status==1){
			return ' <div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action</button>
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
			</button>
			<ul class="dropdown-menu" role="menu">
			<li><a href="bill/update/' . $bill->bill_id . '">Thanh Toan</a></li>
			
			<li><a href="#"  class="delete" id="' . $bill->bill_id . '">Hủy</a></li>
			</ul>
			</div>';
		}elseif ($bill->status==2){
			return' <div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action</button>
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
			</button>';

		}
		})

		->rawColumns(['status'], ['action'])

		->make(true);
	}

	
	function viewEdit($id) {
		$hotel = new Hotel();
		$hotel = $hotel->get_all();
		$bill= new Bill();
		$bill->bill_id=$id;
		$bill1= $bill->get_one();
		$type_id=$bill1->type_id;
		$room=new Room();
		$room->type_id=$type_id;
		$room1=$room->get_all_in_type();
		
		return view("admin/bill_comfirm", [
			'hotel' => $hotel,'bill'=>$bill1,'room1'=>$room1]
	);
	}
	function update($id) {
		// lay toan bo hotel
		$hotel = new Hotel();
		$hotel = $hotel->get_all();
		$bill= new Bill();
		$bill->bill_id=$id;
		$bill1= $bill->get_one();
		$bill->id_bill=$id;
		$room_id=$bill->get_id_room();
		$type_id=$bill1->type_id;
		date_default_timezone_set('Asia/Macau');
		$date=date('Y-m-d H:i:s T', time());
		dd($date);
		// lay id room da comfirm

		return view("admin/bill_update", [
			'hotel' => $hotel,'bill'=>$bill1,'room_id'=>$room_id]
	);
	}


	function removedata(Request $request) {
		// $student = Student::find($request->input('id'));
		$que = DB::table('bill')->where('bill_id',$request->input('id')) ->update(['status' => 2]);
		if ($que) {
			echo 'Data Updated';
		}
	}
}
