<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use App\Model\Bill;
use DB;
use Illuminate\Http\Request;
use Validator;
use App\Model\Hotel;
use Session;
use App\Model\Type;
use App\Model\Post;
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
	public function search_room(Request $request){
		$room=$request->get('room');
		$bed=$request->get('bed');
		$id=$request->get('id');
		Session::put('room',$room);
		$hotel= new Hotel();
		$one_hotel=$hotel->get_hotel($id);
		$info=$hotel->info_hotel($id);
		$show_rooms = DB::table('type_room')
		->where('hotel_id',$id )
		->where('bed',$bed)
		->paginate(3);

		return view('hotel.hotel_room',['hotel'=>$one_hotel,'info'=>$info,'room'=>$show_rooms]);
	}
	public function proocess_booking(Request $request){
		$check_in = date("Y-m-d", strtotime($request->get('check_in')));
		$check_out=date("Y-m-d",strtotime($request->get('check_out')));
		$date1=date_create($check_in);
		$date2=date_create($check_out);
		$diff=date_diff($date1,$date2);
		$so_ngay=$diff->format("%a");
		$total_money=$so_ngay*($request->get('tong_tien'));
		if($total_money !='') {
            $bill = new Bill();
            $bill->name = $request->get('name');
            $bill->email=$request->get('email');
            $bill->phone=$request->get('phone');
            $bill->cus_id=$request->get('cus');
            $bill->check_in = $check_in;
            $bill->check_out = $check_out;
            $bill->so_luong=$request->get('so_phong');
            $bill->room = $request->get('so_phong');
            $bill->total_money=$total_money;
            $bill->type_id=$request->get('type_room');
            $bill->insert_bill();
        }

        return redirect()->route('thank_you');
	}
	public  function view_comfirm(Request $request){
	    $value=$request->session()->get('ma_us');
	   $bill = new Bill();
	   $get_bill=$bill->get_one_bill($value);
	   return view('hotel.thank_you',['info'=>$get_bill]);
    }
	public  function  show_blog(){
        $show_blog= DB::table('post')
            ->paginate(3);
    return view('hotel.blog',['blog'=>$show_blog]);
    }
    public function get_one_news($id){
    	$blog= new Post();
    	$get_one=$blog->getOne1($id);
		 return view('hotel.blog_detail',['blog'=>$get_one]);

    }
}

