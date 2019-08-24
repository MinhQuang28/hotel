<?php

namespace App\Http\Controllers;

use App\Model\Hotel;
use DB;
use Illuminate\Http\Request;
use Validator;
use Yajra\Datatables\Datatables;

class hotelController extends Controller {

	function index() {
		return view('admin.hotel');

	}

	function getdata() {
		$hotel = DB::table('hotel')->select('hotel_id', 'hotel_name', 'hotel_address', 'img1', );
		return Datatables::of($hotel)
		->editColumn('img1', function ($hotel) {
			return 'img/' . $hotel->img1 . '';
		})

		->addColumn('action', function ($hotel) {
			return '<a href="hotel/edit/' . $hotel->hotel_id . '" class="btn btn-sm btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Edit</a> <a href="#" class="btn btn-sm btn-danger delete" id="' . $hotel->hotel_id . '"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
		})
		// ->rawColumns(['action1'], ['action'])

		->make(true);
	}

	function view_insert(){
		return view('admin.new_hotel');
	}

function process_insert(Request $request) {

			
		$image_name = $request->hidden_image;
		$image1 = $request->file('image1');
		$image2 = $request->file('image2');
		$image3 = $request->file('image3');
		if ($image1 !=''&& $image2 !=''&& $image3 !='') {

			$image_name1 = rand() . '.' . $image1->getClientOriginalExtension();
			$image_name2 = rand() . '.' . $image2->getClientOriginalExtension();
			$image_name3 = rand() . '.' . $image3->getClientOriginalExtension();
			$image1->move(public_path('images'), $image_name1);
			$image2->move(public_path('images'), $image_name2);
			$image3->move(public_path('images'), $image_name3);

			$hotel = new Hotel();
			
			$hotel->hotel_name = $request->get('name');
			$hotel->hotel_address = $request->get('address');
			$hotel->img1 = $image_name1;
			$hotel->img2 = $image_name2;
			$hotel->img3 = $image_name3;
			$hotel->describ = $request->get('describ');
			$hotel->insert();

		} else {
			$request->validate([
				'image1' => 'required|image|max:2048',
				'image2' => 'required|image|max:2048',
				'image3' => 'required|image|max:2048',
				'name' => 'required',
				'address' => 'required',
			]);
		}
		return redirect('hotel')->with('messages', 'Data is successfully inserted');

	}
	function viewEdit($id) {
		$hotel = new Hotel();
		$hotel->hotel_id = $id;
		$hotel = $hotel->get_one();

		return view("admin/edit_hotel", [
			'hotel' => $hotel,

		]);
	}
	function process_update(Request $request) {

		$image_name = $request->hidden_image;
		$image1 = $request->file('image1');
		$image2 = $request->file('image2');
		$image3 = $request->file('image3');
		if ($image1 !=''&& $image2 !=''&& $image3 !='') {

			$image_name1 = rand() . '.' . $image1->getClientOriginalExtension();
			$image_name2 = rand() . '.' . $image2->getClientOriginalExtension();
			$image_name3 = rand() . '.' . $image3->getClientOriginalExtension();
			$image1->move(public_path('images'), $image_name1);
			$image2->move(public_path('images'), $image_name2);
			$image3->move(public_path('images'), $image_name3);

			$hotel = new Hotel();
			$hotel->hotel_id = $request->get('id');
			$hotel->hotel_name = $request->get('name');
			$hotel->hotel_address = $request->get('address');
			$hotel->img1 = $image_name1;
			$hotel->img2 = $image_name2;
			$hotel->img3 = $image_name3;
			$hotel->describ = $request->get('describ');
			$hotel->update();

		} else {
			$request->validate([
				'image1' => 'required|image|max:2048',
				'image2' => 'required|image|max:2048',
				'image3' => 'required|image|max:2048',
				'name' => 'required',
				'address' => 'required',
			]);
			$hotel = new Hotel();
			$hotel->hotel_id = $request->get('id');
			$hotel->hotel_name = $request->get('name');
			$hotel->hotel_address = $request->get('address');
			$hotel->describ = $request->get('describ');
			$hotel->update1();
		}
		return redirect('hotel')->with('messages', 'Data is successfully updated');

	}
	function removedata(Request $request) {
		// $student = Student::find($request->input('id'));
		$que = DB::table('hotel')->where('hotel_id', $request->input('id'))->delete();
		if ($que) {
			echo 'Data Deleted';
		}
	}
}
