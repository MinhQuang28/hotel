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
	function bill_today(){
		return view('admin.bill_today');
	}
	function bill_week(){
		return view('admin.bill_week');
	}
	function get_bill_week(){
		date_default_timezone_set('Asia/Macau');
		$bill=new Bill();
		$bill=$bill->get_week();
	
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
				return '<button class="btn btn-xs btn-warning"> Chờ Duyệt</button>';
			}elseif ($bill->status==1 && $bill->check_in==date("Y-m-d")) {
				return '<button class="btn btn-xs btn-info">Đã Duyệt(Checkin hôm nay)</button>';
			}
			elseif ($bill->status==1) {
				return '<button class="btn btn-xs btn-info"> Đã Duyệt(Chưa checkin)</button>';
			}
			elseif ($bill->status==3 && $bill->check_out==date("Y-m-d")) {
				return '<button class="btn btn-xs btn-success"> Thanh toán hôm nay</button>';
			}elseif ($bill->status==3) {
				return '<button class="btn btn-xs btn-Secondary"> Đang sử dụng</button>';
			}
			elseif ($bill->status==2) {
				return '<button class="btn btn-xs btn-primary"> Đã thanh toán</button>';
			}
			else {
				return '<button class="btn btn-xs btn-danger"> Đã Hủy</button>';
			}
		})
		->addColumn('action', function ($bill) {
			if ($bill->status==0) {
				return ' <a href="check_in/' . $bill->bill_id . '"class="btn btn-sm btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Duyệt ngay</a>
			<a href="#" class="btn btn-sm btn-danger delete" id="' . $bill->bill_id . '"><i class="glyphicon glyphicon-remove"></i> Hủy</a>';
		}elseif ($bill->status==3){
			return ' <a href="update/' . $bill->bill_id . '"class="btn btn-sm btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Thanh toán</a>';
		}elseif ($bill->status==1){
			return ' <a href="check_in/' . $bill->bill_id . '"class="btn btn-sm btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Duyệt ngay</a>
			<a href="#" class="btn btn-sm btn-danger delete" id="' . $bill->bill_id . '"><i class="glyphicon glyphicon-remove"></i> Hủy</a>';
		}
		})

		->rawColumns(['status'], ['action'])

		->make(true);
	}
	function getToday(){
		date_default_timezone_set('Asia/Macau');
		$bill=new Bill();
		$bill=$bill->get_today();

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
				return '<button class="btn btn-xs btn-warning"> Chờ Duyệt</button>';
			}elseif ($bill->status==1 && $bill->check_in==date("Y-m-d")) {
				return '<button class="btn btn-xs btn-info">Đã Duyệt(Checkin hôm nay)</button>';
			}
			elseif ($bill->status==1) {
				return '<button class="btn btn-xs btn-info"> Đã Duyệt(Chưa checkin)</button>';
			}
			elseif ($bill->status==3 && $bill->check_out==date("Y-m-d")) {
				return '<button class="btn btn-xs btn-success"> Thanh toán hôm nay</button>';
			}elseif ($bill->status==3) {
				return '<button class="btn btn-xs btn-Secondary"> Đang sử dụng</button>';
			}
			elseif ($bill->status==2) {
				return '<button class="btn btn-xs btn-primary"> Đã thanh toán</button>';
			}
			else {
				return '<button class="btn btn-xs btn-danger"> Đã Hủy</button>';
			}
		})
		->addColumn('action', function ($bill) {
			if ($bill->status==0) {
				return ' <a href="check_in/' . $bill->bill_id . '"class="btn btn-sm btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Duyệt ngay</a>
			<a href="#" class="btn btn-sm btn-danger delete" id="' . $bill->bill_id . '"><i class="glyphicon glyphicon-remove"></i> Hủy</a>';
		}elseif ($bill->status==3){
			return ' <a href="update/' . $bill->bill_id . '"class="btn btn-sm btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Thanh toán</a>';
		}elseif ($bill->status==1){
			return ' <a href="check_in/' . $bill->bill_id . '"class="btn btn-sm btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Duyệt ngay</a>
			<a href="#" class="btn btn-sm btn-danger delete" id="' . $bill->bill_id . '"><i class="glyphicon glyphicon-remove"></i> Hủy</a>';
		}
		})

		->rawColumns(['status'], ['action'])

		->make(true);
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
				return '<button class="btn btn-xs btn-warning"> Chờ Duyệt</button>';
			}elseif ($bill->status==1 && $bill->check_in==date("Y-m-d")) {
				return '<button class="btn btn-xs btn-info">Đã Duyệt(Checkin hôm nay)</button>';
			}
			elseif ($bill->status==1) {
				return '<button class="btn btn-xs btn-info"> Đã Duyệt(Chưa checkin)</button>';
			}
			elseif ($bill->status==3 && $bill->check_out==date("Y-m-d")) {
				return '<button class="btn btn-xs btn-success"> Thanh toán hôm nay</button>';
			}elseif ($bill->status==3) {
				return '<button class="btn btn-xs btn-Secondary"> Đang sử dụng</button>';
			}
			elseif ($bill->status==2) {
				return '<button class="btn btn-xs btn-primary"> Đã thanh toán</button>';
			}
			else {
				return '<button class="btn btn-xs btn-danger"> Đã Hủy</button>';
			}
		})
		->addColumn('action', function ($bill) {
			if ($bill->status==0) {
				return ' <a href="bill/check_in/' . $bill->bill_id . '"class="btn btn-sm btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Duyệt ngay</a>
			<a href="#" class="btn btn-sm btn-danger delete" id="' . $bill->bill_id . '"><i class="glyphicon glyphicon-remove"></i> Hủy</a>';
		}elseif ($bill->status==3){
			return ' <a href="bill/update/' . $bill->bill_id . '"class="btn btn-sm btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Thanh toán</a>';
		}elseif ($bill->status==1){
			return ' <a href="bill/check_in/' . $bill->bill_id . '"class="btn btn-sm btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Duyệt ngay</a>
			<a href="#" class="btn btn-sm btn-danger delete" id="' . $bill->bill_id . '"><i class="glyphicon glyphicon-remove"></i> Hủy</a>';
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
		$room=new Room();
		$room->type_id=$type_id;
		$room1=$room->get_all_in_type();
		$count=$bill->count_booking($id);
		if($count==1){
		$inf_room=$room->get_roomID($id);
	}else{
		$inf_room=$room->get_roomIDs($id);
	}
		date_default_timezone_set('Asia/Macau');
		$date=date('Y-m-d H:i:s T', time());
		
		// lay id room da comfirm

		return view("admin/bill_update", [
			'hotel' => $hotel,'bill'=>$bill1,'room1'=>$room1,'info'=>$inf_room]
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
