<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Validator;
use Yajra\Datatables\Datatables;
use App\Model\Bill;
use App\Model\Hotel;
use App\Model\Room;


class ApiController extends Controller {
    public function get_index_hotel()
	{
		$hotel=new Hotel();
        $hotel=$hotel->limit_hotel();
        $i=0;
        foreach($hotel as $val){
            $data[$i]['hotel_id']=$val->hotel_id;
            $data[$i]['name_hotel']=$val->hotel_name;
            $data[$i]['hotel_address']=$val->hotel_address;
            $data[$i]['img1']=$val->img1;
            $data[$i]['url_hotel']=$val->url_hotel;
            $data[$i]['price_avg']=$val->price_avg;

            $i++;
        }  
        return json_encode($data);
    } 
    function seach_hotel_api1($text){
        $text=trim($text);
        $text=html_entity_decode($text);
        if($text==''){
            $text='Hà Nội';
        }

       $array = DB::select("SELECT * FROM hotel left join city_hotel on hotel.id_city=city_hotel.id where city like '%$text%'   ");
		
       
       
      
      $i=0;
      
        foreach($array as $val){
          
            $data[$i]['id']=$val->hotel_id;
            $data[$i]['name']=$val->hotel_name;
            $data[$i]['price']=$val->price_avg;
            $data[$i]['img1']=$val->img1;
            $data[$i]['city']=$val->city;
            $data[$i]['address']=$val->hotel_address;

            $i++;
        }  
        return json_encode($data);

    }
}