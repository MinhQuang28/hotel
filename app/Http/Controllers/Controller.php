<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;
use Session;
use App\Model\Admin;
use App\Model\Bill;
use App\Model\Hotel;
use App\Model\Room;
use App\Model\Customer;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   
	 public function login_user()
	{
		return view('hotel.login');
	}
	public function process_login()
	{
		$admin           = new Admin();
		$admin->email    = Request::get('email');
		$admin->pass = md5(Request::get('mat_khau'));
		$admin           = $admin->get_login();
		

		if(count($admin)==1&& $admin[0]->status==0){
			Session::put('ma_admin',$admin[0]->id);
			Session::put('ten_admin',$admin[0]->name);
			Session::put('access',$admin[0]->access);

			return redirect()->route("welcome")->with('messages',' Welcome Admin: ');
		}
		return redirect()->route('view_login')->with('error','Đăng nhập sai');
	}
	public function process_login_user()
	{
		$cus           = new Customer();
		$cus->email    = Request::get('email');
		$cus->pass = md5(Request::get('pass'));

		$cus           = $cus->get_login();
		

		if(count($cus)==1&& $cus[0]->access==0){
			Session::put('ma_us',$cus[0]->id);
			Session::put('ten_us',$cus[0]->name);
				Session::put('email',$cus[0]->email);
					Session::put('phone',$cus[0]->phone);

			return redirect()->route("home")->with('messages',' Welcome user: ');
		}
		return redirect()->route('login')->with('error1','Đăng nhập sai');
	}
	public  function welcome()
	{	$room= new Room();
		 $count_room=$room->count_room();
		 $bill= new Bill();
		 $count_bill=$bill->count_bill();
		 $customer= new Customer();
		 $count_cus=$customer->count_cus();
		 $count_bill_today=$bill->count_new();
		 $result_oder=$bill->new_oder();

		return view('admin.welcome',[
			'room' => $count_room,'bill'=>$count_bill,'cus'=>$count_cus,'today'=>$count_bill_today,'result'=>$result_oder]);
	}
	
	public function logout()
	{
		// Session::forget('ma_admin');

		Session::flush();

		return redirect()->route('view_login')->with('success','Đăng xuất thành công');
	}
	public function logout_user()
	{
		Session::forget('ma_us');

		// Session::flush();

		return redirect()->route('home')->with('success','Đăng xuất thành công');
	}
	 public function view_login(Request $request)
	{
		if(Session::get('ma_admin')!=''){
			return  redirect()->route('welcome')->with('messages','bạn đã đăng nhập với tài khoản'); 
		}else {
			return view('admin.view_login');
		}
		
	}
	public function thong_ke( ){
		$hotel = new Hotel();
		$customer= new customer();
		$bill = new Bill();
		if(Request::get('year')!=''){
			$year=Request::get('year');
			}
		else {
			$year='2019';
		}
				
				$month1=''.$year.'-1-1';
				$month2=''.$year.'-2-1';
				$month3=''.$year.'-3-1';
				$month4=''.$year.'-4-1';
				$month5=''.$year.'-5-1';
				$month6=''.$year.'-6-1';
				$month7=''.$year.'-7-1';
				$month8=''.$year.'-8-1';
				$month9=''.$year.'-9-1';
				$month10=''.$year.'-10-1';
				$month11=''.$year.'-11-1';
				$month12=''.$year.'-12-1';
				$month13=''.$year.'-12-30';
// hoa don hoan thanh
			$hoadon['bill_done']['1']=$bill->bill_done($month1,$month2);
			$hoadon['bill_done']['2']=$bill->bill_done($month2,$month3);
			$hoadon['bill_done']['3']=$bill->bill_done($month3,$month4);
			$hoadon['bill_done']['4']=$bill->bill_done($month4,$month5);
			$hoadon['bill_done']['5']=$bill->bill_done($month5,$month6);
			$hoadon['bill_done']['6']=$bill->bill_done($month6,$month7);
			$hoadon['bill_done']['7']=$bill->bill_done($month7,$month8);
			$hoadon['bill_done']['8']=$bill->bill_done($month8,$month9);
			$hoadon['bill_done']['9']=$bill->bill_done($month9,$month10);
			$hoadon['bill_done']['10']=$bill->bill_done($month10,$month11);
			$hoadon['bill_done']['11']=$bill->bill_done($month11,$month12);
			$hoadon['bill_done']['12']=$bill->bill_done($month12,$month13);
// hoa dơn bị huỷ
			$hoadon['bill_cancel_year']=$bill->bill_cancel($month1,$month13);
			$hoadon['bill_cancel']['1']=$bill->bill_cancel($month1,$month2);
			$hoadon['bill_cancel']['2']=$bill->bill_cancel($month2,$month3);
			$hoadon['bill_cancel']['3']=$bill->bill_cancel($month3,$month4);
			$hoadon['bill_cancel']['4']=$bill->bill_cancel($month4,$month5);
			$hoadon['bill_cancel']['5']=$bill->bill_cancel($month5,$month6);
			$hoadon['bill_cancel']['6']=$bill->bill_cancel($month6,$month7);
			$hoadon['bill_cancel']['7']=$bill->bill_cancel($month7,$month8);
			$hoadon['bill_cancel']['8']=$bill->bill_cancel($month8,$month9);
			$hoadon['bill_cancel']['9']=$bill->bill_cancel($month9,$month10);
			$hoadon['bill_cancel']['10']=$bill->bill_cancel($month10,$month11);
			$hoadon['bill_cancel']['11']=$bill->bill_cancel($month11,$month12);
			$hoadon['bill_cancel']['12']=$bill->bill_cancel($month12,$month13);
			//total bill
			$hoadon['total_bill_done']=$bill->total_bill3($month1,$month13);
			$hoadon['total_bill1']['1']=$bill->total_bill1($month1,$month2);
			$hoadon['total_bill1']['2']=$bill->total_bill1($month2,$month3);
			$hoadon['total_bill1']['3']=$bill->total_bill1($month3,$month4);
			$hoadon['total_bill1']['4']=$bill->total_bill1($month4,$month5);
			$hoadon['total_bill1']['5']=$bill->total_bill1($month5,$month6);
			$hoadon['total_bill1']['6']=$bill->total_bill1($month6,$month7);
			$hoadon['total_bill1']['7']=$bill->total_bill1($month7,$month8);
			$hoadon['total_bill1']['8']=$bill->total_bill1($month8,$month9);
			$hoadon['total_bill1']['9']=$bill->total_bill1($month9,$month10);
			$hoadon['total_bill1']['10']=$bill->total_bill1($month10,$month11);
			$hoadon['total_bill1']['11']=$bill->total_bill1($month11,$month12);
			$hoadon['total_bill1']['12']=$bill->total_bill1($month12,$month13);
			// custommer
			$cus['1']=$bill->total_bill1($month1,$month2);
			$cus['2']=$bill->total_bill1($month2,$month3);
			$cus['3']=$bill->total_bill1($month3,$month4);
			$cus['4']=$bill->total_bill1($month4,$month5);
			$cus['5']=$bill->total_bill1($month5,$month6);
			$cus['6']=$bill->total_bill1($month6,$month7);
			$cus['7']=$bill->total_bill1($month7,$month8);
			$cus['8']=$bill->total_bill1($month8,$month9);
			$cus['9']=$bill->total_bill1($month9,$month10);
			$cus['10']=$bill->total_bill1($month10,$month11);
			$cus['11']=$bill->total_bill1($month11,$month12);
			$cus['12']=$bill->total_bill1($month12,$month13);
			$thong_ke['total_money']=$bill->total_money();
			$thong_ke['total_hotel']=$bill->total_hotel();
			$thong_ke['total_cus']=$bill->total_cus();
			$thong_ke['total_bill']=$bill->total_bill();



		
		return view('admin.thong_ke',['hoadon'=>$hoadon,'cus'=>$cus,'thong_ke'=>$thong_ke]);
	}
}


