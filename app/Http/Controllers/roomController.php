<?php

namespace App\Http\Controllers;
use App\Model\Room;
use App\Model\Hotel;
use App\Model\Type;
use DB;
use Illuminate\Http\Request;
use Validator;
use Yajra\Datatables\Datatables;

class roomController extends Controller {
	public $table="room";
	function index() {
		$hotel= new Hotel();
		
		$hotel=$hotel->get_all();
		
		$type= new Type();
		
		$type=$type->get_all();
		return view('admin.room',['hotel'=>$hotel,'type'=>$type]);
	}

	function getdata() {
		
		$admin =DB::select("select * from room INNER join type_room on room.type_id=type_room.type_id INNER JOIN hotel on type_room.hotel_id=hotel.hotel_id");
		return Datatables::of($admin)
		->editColumn('room_status', function ($admin) {
				//change over here
			if ($admin->room_status==0) {
				return '<button class="btn btn-xs btn-success"> Emtry</button>';
			}elseif ($admin->room_status==1) {
				return '<button class="btn btn-xs btn-warning">Not Emtry </button>';
			}
			
		})

		->addColumn('action', function ($admin) {
			return '<a href="#" class="btn btn-sm btn-primary edit" id="' . $admin->room_id .'"><i class="glyphicon glyphicon-edit"></i> Edit</a> <a href="#" class="btn btn-sm btn-danger delete" id="' . $admin->room_id . '"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
		})
		->rawColumns(['room_status', 'action'])


		->make(true);
	}

	function postdata(Request $request) {
		$validation = Validator::make($request->all(), [
			'name' => 'required',
			
		]);

		$error_array = array();
		$success_output = '';
		if ($validation->fails()) {
			foreach ($validation->messages()->getMessages() as $field_name => $messages) {
				$error_array[] = $messages;
			}
		} else {
			if ($request->get('button_action') == "insert") {
				$que = DB::insert('insert into room (room_name,room_status,type_id ) values (?,?,?)', [$request->get('name'), $request->get('status'), $request->get('type')]);

				if ($que) {$success_output = '<div class="alert alert-success">Data Inserted</div>';}
			}

				if ($request->get('button_action') == 'update') {
					$query_update = DB::update('update room set  room_name=?,room_status=?,type_id=?  where room_id = ?', [$request->get('name'), $request->get('status'), $request->get('type'), $request->get('id')]);
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
		$que = DB::select('select * from room where room_id = ?', [$request->get('id')]);
		foreach ($que as $out) {
			$output = array(
				'name' => $out->room_name,
				'type' => $out->type_id,
				'status'=>$out->room_status,
			);
		}

		echo json_encode($output);
	}
		

		
		function process_update(Request $request) {
			$admin = new Admin();
			$admin->id = $request->get('id');
			$admin->name = $request->get('name');
			$admin->email = $request->get('email');
			$admin->gender = $request->get('gender');
			$admin->pass = $request->get('pass');
			$admin->birth = $request->get('birth');
			$admin->status = $request->get('status');
			$admin->update();
			return redirect('admin')->with('messages', 'Data is successfully updated');

		}

		function removedata(Request $request) {
		// $student = Student::find($request->input('id'));
			$que = DB::table('admin')->where('id', $request->input('id'))->delete();
			if ($que) {
				echo 'Data Deleted';
			}
		}
	}
