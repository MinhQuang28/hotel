<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use DB;
use Illuminate\Http\Request;
use Validator;
use App\Model\Hotel;
use Session;
use App\Model\Type;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class indexController extends Controller {

	public function index()
	{
		$hotel=new Hotel();
		$hotel=$hotel->limit_hotel();
		return view('hotel.index',['hotel'=>$hotel]);
	}
	public function hotels(){
		$show_hotel = DB::table('hotel')
		->leftJoin('city_hotel', 'hotel.id_city', '=', 'city_hotel.id')

		->paginate(6);

		return view('hotel.hotel', ['hotel' => $show_hotel]);

	}
	public function search(Request $request){
		// $check_in = date("Y-m-d", strtotime($request->get('check_in')));
		// $check_out=date("Y-m-d",strtotime($request->get('check_out')));
		$show_hotel = DB::table('hotel')
		->leftJoin('city_hotel', 'hotel.id_city', '=', 'city_hotel.id')
		->where('city',[$request->get('city')])
		->paginate(6);

		Session::put('check_in',$request->get('check_in'));
		Session::put('check_out',$request->get('check_out'));

		return view('hotel.hotel', ['hotel' => $show_hotel]);

	}
	public function rooms($id){
		$type= new Type();
		$one_room =  $type->get_room($id);
		$show_hotel = DB::table('hotel')
		->leftJoin('city_hotel', 'hotel.id_city', '=', 'city_hotel.id')

		->paginate(4);

		return view('hotel.room',['room'=>$one_room,'hotel'=>$show_hotel]);
	}
	public function hotel($id){
		$hotel= new Hotel();
		$one_hotel=$hotel->get_hotel($id);
		$info=$hotel->info_hotel($id);
		$show_rooms = DB::table('type_room')
		->where('hotel_id',$id )
		->paginate(3);

		return view('hotel.hotel_room',['hotel'=>$one_hotel,'info'=>$info,'room'=>$show_rooms]);


	}
}

