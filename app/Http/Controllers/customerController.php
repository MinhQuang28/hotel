<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Validator;
use Yajra\Datatables\Datatables;
use App\Model\Customer;

class customerController extends Controller {

	function index() {
		return view('admin.customer');
		//http://127.0.0:8000/ajaxdata
	}

	function getdata() {
		$customer = DB::table('customer')->select('id', 'name', 'email', 'birth', 'gender', 'phone', 'access');
		return Datatables::of($customer)
			->editColumn('birth', function ($customer) {
				//change over here
				return date('d/m/Y', strtotime($customer->birth));
			})
		// ->editColumn('img1', function ($customer) {
		// 	return 'img/' . $customer->img1 . '';
		// })
			->editColumn('access',function($customer){
				if($customer->access==0){
					return '<button class="btn btn-xs btn-success">online </button>';
				}else {
					return '<button class="btn btn-xs btn-danger">block </button>';
				}
			})
			->addColumn('action', function ($customer) {
				return '<a href="customer/edit" class="btn btn-sm btn-primary edit" id="' . $customer->id . '"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="#" class="btn btn-sm btn-danger delete" id="' . $customer->id . '"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
			})
		->rawColumns(['access'], ['action'])

			->make(true);
	}

	function postdata(Request $request) {
		$validation = Validator::make($request->all(), [
			'name' => 'required',
			'email' => 'required',
		]);

		$error_array = array();
		$success_output = '';
		if ($validation->fails()) {
			foreach ($validation->messages()->getMessages() as $field_name => $messages) {
				$error_array[] = $messages;
			}
		} else {
			if ($request->get('button_action') == "insert") {
				// $student = arr([
				// 	'name' => $request->get('name'),
				// 	'email' => $request->get('name'),
				// ]);
				$que = DB::insert('insert into customer (name,
				email ) values (?, ?)', [$request->get('name'), $request->get('email')]);

				if ($que) {$success_output = '<div class="alert alert-success">Data Inserted</div>';}

			}

		}

	}
	function edit($id) {
		$customer = new Customer();
		$customer->id = $id;
		$customer = $customer->get_one();
		return view('edit_customer', ['customer'=>$customer]);

	}

	function fetchdata(Request $request) {
		$id = $request->input('id');
		$student = Student::find($id);
		$output = array(
			'first_name' => $student->first_name,
			'last_name' => $student->last_name,
		);
		echo json_encode($output);
	}

	function removedata(Request $request) {
		// $student = Student::find($request->input('id'));
		$que = DB::table('customer')->where('id', $request->input('id'))->delete();
		if ($que) {
			echo 'Data Deleted';
		}
	}
}
