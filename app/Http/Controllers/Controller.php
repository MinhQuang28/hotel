<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;
use Session;
use App\Model\Admin;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function view_login()
	{
		return view('admin.view_login');
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
	public  function welcome()
	{
		return view('admin.welcome');
	}
	
	public function logout()
	{
		// Session::forget('ma_admin');

		Session::flush();

		return redirect()->route('view_login')->with('success','Đăng xuất đúng');
	}
}


