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
use App\Model\Customer;
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
		->leftJoin('hotel', 'hotel.hotel_id', '=', 'type_room.hotel_id')
		->where('url_hotel',$id )
		->paginate(3);

		return view('hotel.hotel_room',['hotel'=>$one_hotel,'info'=>$info,'room'=>$show_rooms]);


	}
	public function search_room(Request $request){
		$room=$request->get('room');
		$bed=$request->get('bed');
		$id=$request->get('id');
		Session::put('check_in',$request->get('check_in'));
		Session::put('check_out',$request->get('check_out'));
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
		
		$get_blog=DB::select('select * from post limit 0,3');
		return view('hotel.thank_you',['get_bill'=>$get_bill,'get_blog'=>$get_blog]);
	}

	public  function  show_blog(){
		$show_blog= DB::table('post')
		->paginate(3);
		return view('hotel.blog',['blog'=>$show_blog]);
	}

	public function get_one_news($id){
		$blog= new Post();
		$get_one=$blog->getOne1($id);
		$comment=DB::select('SELECT comment,comment_name,date from comment inner join post on post.id=comment.id_post where url_post = ?', [$id]);
		
		return view('hotel.blog_detail',['blog'=>$get_one,'comment'=>$comment]);

	}
	public function profile_account(Request $request){
		$id=$request->session()->get('ma_us');
		$cus= new Customer();
		$info_cus= $cus->get_info($id);
		return view('hotel.use_profile',['info'=>$info_cus]);
	}
	public function booking( Request $request){
		$cus_id=$request->session()->get('ma_us');
		$get_bill= DB::table('bill')
		  ->join('type_room', 'bill.type_id', '=', 'type_room.type_id')
            ->join('hotel', 'hotel.hotel_id', '=', 'type_room.hotel_id')
            ->select('bill.name','bill.bill_id','bill.email','bill.phone','bill.so_luong','bill.create_at','bill.check_in','hotel.hotel_name','bill.status')
		->where('cus_id',$cus_id)
		->paginate(4);
		return view('hotel.booking',['bill'=>$get_bill]);
	}
	public function booking_status(Request $request){
		$type=$request->get('type');
		$cus_id=$request->session()->get('ma_us');
		$bill= new Bill();
		// 1 all bill
		if($type==1){
		
		$get_bill=$bill->get_all_byId($cus_id);
		}
		// 2 waiting
		elseif($type==2){
			$get_bill=$bill->get_bill_wait($cus_id);
		}
		// 3 received
		elseif($type==3){
			$get_bill=$bill->get_bill_received($cus_id);
			// 4 cancel
		}elseif ($type==4) {
			$get_bill=$bill->get_bill_canceled($cus_id);
		}
		
		return view('hotel.booking_status',['bill'=>$get_bill]);
	}
	function add_comment(Request $request){
		DB::insert('insert into comment (comment_name,comment_email,comment,id_post) values (?, ?,?,?)', [$request->get('name'),$request->get('email'),$request->get('comment'),$request->get('id_post') ]);

		

	}
	function view_comment(Request $request){
	$arr=DB::select('select * from comment where id_post = ?', [$request->get('id_post')]);

		return view('hotel.fetch_comment',['comment'=>$arr]);

	}
	 function update_profile(){
	 	
	 }
	 function insert_feed_back(Request $request){
	 	DB::insert('insert into feed_back ( name,email,phone,mes) values (?, ?,?,?)', [$request->get('name'), $request->get('email'),$request->get('phone'),$request->get('mes')]);

return redirect()->route('Contact')->with('mes','Chúng tôi đã nhận được phản hồi của bạn. Xin cảm ơn');
	 }
	 function contact(){
	 	return view('hotel.contact');
	 }

	 function service(){
	 	$blog = new Post();
	 	$service = $blog->get_recent();
	 	return view('hotel.service', ['service'=>$service]);
	 }
	 function view_bill($id){
$blog = new Post();
$get_blog = $blog->get_recent();

		$bill = new Bill();
		$bill->bill_id = $id;
		$array_details = $bill->get_details($id);
		return view('hotel.bill_detail', [
			'array_details' => $array_details,
			'get_blog' => $get_blog
		]);
	}
	function cancel_booking($id){
		DB::update('update bill set status = 4 where bill_id = ?', [$id]);

return redirect()->route('booking')->with('mes','đơn hàng đã được huỷ. Xin cảm ơn');
	}

}

