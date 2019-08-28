<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use DB;
use Illuminate\Http\Request;
use Validator;
use App\Model\Hotel;
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
 public function rooms(){
 	return view('hotel.room');
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
