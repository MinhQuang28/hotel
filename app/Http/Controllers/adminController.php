<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use DB;
use Illuminate\Http\Request;
use Validator;
use Yajra\Datatables\Datatables;

class adminController extends Controller {

	function index(Request $request) {
		$access=$request->session()->get('access');
		if($access==1){
		return view('admin.admin');
	}
		return redirect()->route('welcome')->with('messages',' bạn không được truy cập Admin với tài khoản: ');
	}

	function getdata() {
		// $admin = DB::table('admin')->select('id', 'name', 'email', 'birth', 'gender', 'access', 'status');
		$getall = new Admin();
		$admin=$getall->get_all();
		return Datatables::of($admin)
 		// ->setRowAttr(['align'=>'center'])
		->editColumn('birth', function ($admin) {
				//change over here
			return date('d/m/Y', strtotime($admin->birth));
		})
		->editColumn('gender', function ($admin) {
				//change over here
			if ($admin->gender == 0) {
				return "female";
			} else {
				return "male";
			}
		})
		->editColumn('status', function ($admin) {
			if ($admin->status == 0) {
				return '<button class="btn btn-xs btn-success">online </button>';
			} else {
				return '<button class="btn btn-xs btn-danger">block </button>';
			}
		})

		->addColumn('action', function ($admin) {
			return '<a href="user/edit/' . $admin->id . '" class="btn btn-sm btn-primary edit"><i class="glyphicon glyphicon-edit"></i>  Edit</a>  <a href="#" class="btn btn-sm btn-danger delete" id="' . $admin->id . '"><i class="glyphicon glyphicon-remove"></i>Delete</a>';
		})
		// ->rawColumns(['action1'], ['action'])
		->rawColumns(['status', 'access', 'action'])

		->make(true);
		
	}

	function postdata(Request $request) {
		$validation = Validator::make($request->all(), [
			'name' => 'required',
			'email' => 'required',
			'password' => 'required',
		]);

		$error_array = array();
		$success_output = '';
		if ($validation->fails()) {
			foreach ($validation->messages()->getMessages() as $field_name => $messages) {
				$error_array[] = $messages;
			}
		} else {
			if ($request->get('button_action') == "insert") {
			
			$que = DB::insert('insert into admin (name,email,pass,gender,birth,SDT ) values (?,?,?,?,?,?)', [$request->get('name'),$request->get('email'),$request->get('password'),$request->get('gender'),$request->get('birth'),$request->get('SDT')]);

				if ($que) {$success_output = '<div class="alert alert-success">Data Inserted</div>';}

			}


		}
		$output = array(
			'error' => $error_array,
			'success' => $success_output,
		);
		echo json_encode($output);
	}
	function viewedit($id) {

		$admin = new Admin();
		$admin->id = $id;
		$admin = $admin->get_one();

		return view("admin/edit_admin", [
			'admin' => $admin,

		]);

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
		return redirect('admin/user')->with('messages', 'Data is successfully updated');

	}

	function removedata(Request $request) {
		// $student = Student::find($request->input('id'));
		$que = DB::table('admin')->where('id', $request->input('id'))->delete();
		if ($que) {
			echo 'Data Deleted';
		}
	}
	function feed_back() {
				return view('admin.feed_back');
			}
	function getdata_feed_back() {
		// $admin = DB::table('admin')->select('id', 'name', 'email', 'birth', 'gender', 'access', 'status');
		$getall = new Admin();
		$f_back=$getall->get_feed_back();
		return Datatables::of($f_back)
 		// ->setRowAttr(['align'=>'center'])
		->editColumn('create_at', function ($f_back) {
				//change over here
			return date('d/m/Y H:m:s', strtotime($f_back->create_at));
		})
		
		
		->addColumn('action', function ($f_back) {
			return '<a href="#" class="btn btn-sm btn-primary edit" id="' . $f_back->id . '"><i class="glyphicon glyphicon-edit"></i> View More</a> ';
		})
		// ->rawColumns(['action1'], ['action'])
		->rawColumns(['action'])

		->make(true);
		
	}

}
