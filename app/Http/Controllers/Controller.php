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
    public function view_login()
	{
		return view('admin.view_login');
	} public function login_user()
	{
		return view('hotel.login');
	}
	public function process_login()
	{
		$admin           = new Admin();
		$admin->email    = Request::get('email');
		$admin->pass = Request::get('mat_khau');

		$admin           = $admin->get_login();
		

		if(count($admin)==1&& $admin[0]->status==0){
			Session::put('ma_admin',$admin[0]->id);
			Session::put('ten_admin',$admin[0]->name);

			return redirect()->route("welcome")->with('messages',' Welcome Admin: ');
		}
		return redirect()->route('view_login')->with('error','Đăng nhập sai');
	}
	public function process_login_user()
	{
		$cus           = new Customer();
		$cus->email    = Request::get('email');
		$cus->pass = Request::get('pass');

		$cus           = $cus->get_login();
		

		if(count($cus)==1&& $cus[0]->access==0){
			Session::put('ma_us',$cus[0]->id);
			Session::put('ten_us',$cus[0]->name);

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

		return redirect()->route('view_login')->with('success','Đăng xuất đúng');
	}
}


