<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Validator;
use Yajra\Datatables\Datatables;
use App\Model\Type;
use App\Model\Hotel;

class typeController extends Controller {

	function index() {
		$hotel= new Hotel();
		$hotel=$hotel->get_all();
		return view('admin.type',["hotel"=>$hotel]);
		
	}

	function getdata(Request $request) {
			// $type = DB::table('type_room')->select('type_id', 'type_name', 'price');
			$type = new Type;
			$type=$type->get_all();
		
		return Datatables::of($type)
			->addColumn('action', function ($type) {
				return '<a href="#" class="btn btn-sm btn-primary edit" id="' . $type->type_id . '"><i class="glyphicon glyphicon-edit"></i> Edit</a> <a href="#" class="btn btn-sm btn-danger delete" id="' . $type->type_id . '"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
			})

		// ->rawColumns(['action1'], ['action'])

			->make(true);
	}
	

	function postdata(Request $request) {
		$validation = Validator::make($request->all(), [
			'name' => 'required',
			'price' => 'required',
		]);

		$error_array = array();
		$success_output = '';
		if ($validation->fails()) {
			foreach ($validation->messages()->getMessages() as $field_name => $messages) {
				$error_array[] = $messages;
			}
		} else {
			if ($request->get('button_action') == "insert") {
			
				$que = DB::insert('insert into type_room (type_name,
				price,hotel_id,guest ) values (?,?,?,?)', [$request->get('name'), $request->get('price'),$request->get('hotel_id'),$request->get('guest')]);

				if ($que) {$success_output = '<div class="alert alert-success">Data Inserted</div>';}

			}

			if ($request->get('button_action') == 'update') {
				$query_update = DB::update('update type_room set type_name =?,price=?,hotel_id=?,guest=?  where type_id = ?', [$request->get('name'), $request->get('price'),$request->get('hotel_id'),$request->get('guest'), $request->get('id')]);
				$success_output = '<div class="alert alert-success">Data Updated</div>';
			}

		}
		$output = array(
			'error' => $error_array,
			'success' => $success_output,
		);
		echo json_encode($output);
	}

	function fetchdata(Request $request) {
		$que = DB::select('select * from type_room where type_id = ?', [$request->get('id')]);
		foreach ($que as $out) {
			$output = array(
				'name' => $out->type_name,
				'price' => $out->price,
				'hotel'=>$out->hotel_id,
				'bed'=>$out->bed
			);
		}

		echo json_encode($output);
	}

	function removedata(Request $request) {
		// $student = Student::find($request->input('id'));
		$que = DB::table('type')->where('type_id', $request->input('id'))->delete();
		if ($que) {
			echo 'Data Deleted';
		}
	}
	function insert_detail($id){
		return view('admin.new_typeD');
	}
}
