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
use App\Model\Type;


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
		
       if(count($array)>0){
           
    
       
      
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
       }else{
           $data=0;
       }
        return json_encode($data);

    }
    function get_city(){
        $array = DB::select("SELECT * FROM city_hotel ");
        $i=0;
        foreach($array as $val){
          
            $data[$i]['id']=$val->id;
            $data[$i]['name']=$val->city;
            $data[$i]['img']=$val->img;
            $i++;
        }  
        return json_encode($data);
    }
    function list_hotel($page){
    
        $limit=8;
        $start=($page-1)*$limit;
if($page<3){
            $array = DB::select("SELECT * FROM hotel Limit $start,$limit ");
            
            $i=0;
            foreach($array as $val){
                $data[$i]['hotel_id']=$val->hotel_id;
                $data[$i]['name_hotel']=$val->hotel_name;
                $data[$i]['hotel_address']=$val->hotel_address;
                $data[$i]['img1']=$val->img1;
                $data[$i]['url_hotel']=$val->url_hotel;
                $data[$i]['price_avg']=$val->price_avg;

                $i++;
            }  }else{
                $data='';
            }
            return json_encode($data);
        
    }
    function get_request(Request $request){
        dump($request->get('page'));

        die(1);

    }

    public function info_hotel_id(Request $request){
     $id= $request->get('id_hotel');
		 $array=DB::select("SELECT hotel.hotel_id,hotel.hotel_name,hotel.price_avg, info_hotel.img,hotel.img1,info_hotel.img2,info_hotel.img3,overview,info_hotel.service,info_hotel.restaurant from info_hotel inner join hotel on hotel.hotel_id=info_hotel.id_hotel where hotel_id = $id");
    
        $data['hotel_id']=$array[0]->hotel_id;
        $data['hotel_name']=$array[0]->hotel_name;
        $data['price_avg']=$array[0]->price_avg;
        $data['img']=$array[0]->img1;
        $data['img1']=$array[0]->img1;
        $data['img2']=$array[0]->img2;
        $data['overview']=$array[0]->overview;
        $data['service']=$array[0]->service;
        $data['restaurant']=$array[0]->restaurant;

        
        return json_encode($data);
    }
    public function info_room_hotel(Request $request){
        $id= $request->get('id_hotel');
        $show_rooms = DB::select("SELECT * FROM type_room  WHERE hotel_id= $id");
       
        $i=0;
        foreach($show_rooms as $val){
            $data[$i]['id_room']=$val->type_id;
            $data[$i]['name']=$val->type_name;
            $data[$i]['price']=$val->price;
            $data[$i]['img']=$val->img_type;
            $data[$i]['desc']='Hurry up,this is your last room';
           
            $i++;
        }
        return json_encode($data);
    }
    function login_user_api(Request $request){
        $email= $request->get('email');
        $pass= md5($request->get('pass'));
        $array = DB::select("select * from customer
        where email = ? and pass = ?
        limit 1",[$email,$pass]);
        if(count($array)==1&& $array[0]->access==0){
            $data['id']= $array[0]->id;
            $data['name']= $array[0]->name;
        
        if( $array[0]->token==Null){
           
            $token=md5(time());
            $data['token']= $token;
            DB::update("update  customer set token='$token'
            where id=?
            limit 1",[$array[0]->id]);

        }else{
            $data['token']= $array[0]->token;
        }
    }else{
        $data='access deny';
    }
       

    return json_encode($data); 
    }
    function info_user_api(Request $request){
        $id= $request->get('id');
        $token= $request->get('token');
      
        $array = DB::select("select * from customer
        where id = ? and token = ?
        limit 1",[$id,$token]);
        if(count($array)==1&& $array[0]->access==0){
            $data['id']= $array[0]->id;
            $data['name']= $array[0]->name;
            $data['gender']= $array[0]->gender;
            $data['phone']= $array[0]->phone;
            $data['address']= $array[0]->address;
            $data['avatar_user']= $array[0]->avatar_user;
            
        
       
    }else{
        $data='get data fail';
    }
       

    return json_encode($data); 
    }
   public function info_room_id(Request $request){
        $id= $request->get('id_room');
          
           $show_rooms = DB::select("SELECT * FROM type_room  INNER JOIN info_room ON type_room.type_id= info_room.id_type WHERE type_room.type_id= $id");
              
        //    dump($show_rooms);
                $data['id_room']=$show_rooms[0]->type_id;
               $data['name']=$show_rooms[0]->type_name;
               $data['price']=$show_rooms[0]->price;
               $data['img']=$show_rooms[0]->img_type;
               $data['img1']=$show_rooms[0]->img1;
               $data['img2']=$show_rooms[0]->img2;
               $data['img3']=$show_rooms[0]->img3;
               $data['img4']=$show_rooms[0]->img4;
               $data['img5']=$show_rooms[0]->img4;
               $data['desc']=$show_rooms[0]->short_des;
               $data['service']=$show_rooms[0]->service;
           
           
           return json_encode($data);
       }
        function api_view_booking(Request $request){
        $id= $request->get('id_user');
        $page=$request->get('page');
        if(empty($page)){
            $page=0;
        }
        $limit=10;
        $start=$page*$limit;
        $total_num=DB::select("SELECT count(bill.bill_id) as num FROM bill  INNER JOIN type_room ON type_room.type_id= bill.type_id INNER JOIN hotel on hotel.hotel_id=type_room.hotel_id WHERE cus_id=$id ");
        $total_bill=$total_num[0]->num;
        if( ceil( $total_bill/$limit)<$page){
            $data=[];

        }else{
        $get_bill=DB::select("SELECT bill.name,bill.bill_id,bill.email,bill.phone,bill.so_luong,bill.create_at,bill.check_in,hotel.hotel_name,bill.status FROM bill  INNER JOIN type_room ON type_room.type_id= bill.type_id INNER JOIN hotel on hotel.hotel_id=type_room.hotel_id
        WHERE cus_id=$id  order by bill.bill_id desc LIMIT $start,$limit ");
        if(count($get_bill)>=1){
         $i=0;
         foreach($get_bill as $val){
        $data[$i]['name']=$val->name;
        $data[$i]['id_bill']=$val->bill_id;
        $data[$i]['email']=$val->email;
        $data[$i]['phone']=$val->phone;
        $data[$i]['so_phong']=$val->so_luong;
        $data[$i]['check_in']=date('d M,Y', strtotime($val->check_in));
        $data[$i]['date']=date('d', strtotime($val->check_in));
        $data[$i]['month']=date('M', strtotime($val->check_in));

        $data[$i]['hotel_name']=$val->hotel_name;
        $data[$i]['status']=$val->status;
        $i++;
         }
        }else{
            $data=array();
        }
    }
        return json_encode($data);

 }
 function api_view_booking_done(Request $request){
    $id= $request->get('id_user');
    $page=$request->get('page');
    if(empty($page)){
        $page=0;
    }
    $limit=10;
    $start=$page*$limit;
    $total_num=DB::select("SELECT count(bill.bill_id) as num FROM bill  INNER JOIN type_room ON type_room.type_id= bill.type_id INNER JOIN hotel on hotel.hotel_id=type_room.hotel_id WHERE cus_id=$id and bill.status=1 ");
    $total_bill=$total_num[0]->num;
    if( ceil( $total_bill/$limit)<$page){
        $data=[];

    }else{
    $get_bill=DB::select("SELECT bill.name,bill.bill_id,bill.email,bill.phone,bill.so_luong,bill.create_at,bill.check_in,hotel.hotel_name,bill.status FROM bill  INNER JOIN type_room ON type_room.type_id= bill.type_id INNER JOIN hotel on hotel.hotel_id=type_room.hotel_id
    WHERE cus_id=$id and bill.status=1   order by bill.bill_id desc LIMIT $start,$limit ");
    if(count($get_bill)>=1){
     $i=0;
     foreach($get_bill as $val){
    $data[$i]['name']=$val->name;
    $data[$i]['id_bill']=$val->bill_id;
    $data[$i]['email']=$val->email;
    $data[$i]['phone']=$val->phone;
    $data[$i]['so_phong']=$val->so_luong;
    $data[$i]['check_in']=date('d M,Y', strtotime($val->check_in));
    $data[$i]['date']=date('d', strtotime($val->check_in));
    $data[$i]['month']=date('M', strtotime($val->check_in));
    $data[$i]['hotel_name']=$val->hotel_name;
    $data[$i]['status']=$val->status;
    $i++;
     }
    }else{
        $data=array();
    }
}
    return json_encode($data);

}
function api_view_booking_waiting(Request $request){
    $id= $request->get('id_user');
    $page=$request->get('page');
    if(empty($page)){
        $page=0;
    }
    $limit=10;
    $start=$page*$limit;
    $total_num=DB::select("SELECT count(bill.bill_id) as num FROM bill  INNER JOIN type_room ON type_room.type_id= bill.type_id INNER JOIN hotel on hotel.hotel_id=type_room.hotel_id WHERE cus_id=$id and bill.status=0 ");
    $total_bill=$total_num[0]->num;
    if( ceil( $total_bill/$limit)<$page){
        $data=[];

    }else{
    $get_bill=DB::select("SELECT bill.name,bill.bill_id,bill.email,bill.phone,bill.so_luong,bill.create_at,bill.check_in,hotel.hotel_name,bill.status FROM bill  INNER JOIN type_room ON type_room.type_id= bill.type_id INNER JOIN hotel on hotel.hotel_id=type_room.hotel_id
    WHERE cus_id=$id and bill.status=0   order by bill.bill_id desc LIMIT $start,$limit ");
    if(count($get_bill)>=1){
     $i=0;
     foreach($get_bill as $val){
    $data[$i]['name']=$val->name;
    $data[$i]['id_bill']=$val->bill_id;
    $data[$i]['email']=$val->email;
    $data[$i]['phone']=$val->phone;
    $data[$i]['so_phong']=$val->so_luong;
    $data[$i]['check_in']=date('d M,Y', strtotime($val->check_in));
    $data[$i]['date']=date('d', strtotime($val->check_in));
    $data[$i]['month']=date('M', strtotime($val->check_in));
    $data[$i]['hotel_name']=$val->hotel_name;
    $data[$i]['status']=$val->status;
    $i++;
     }
    }else{
        $data=array();
    }
}
    return json_encode($data);

}
function api_view_booking_false(Request $request){
    $id= $request->get('id_user');
    $page=$request->get('page');
    if(empty($page)){
        $page=0;
    }
    $limit=10;
    $start=$page*$limit;
    $total_num=DB::select("SELECT count(bill.bill_id) as num FROM bill  INNER JOIN type_room ON type_room.type_id= bill.type_id INNER JOIN hotel on hotel.hotel_id=type_room.hotel_id WHERE cus_id=$id and bill.status=4 ");
    $total_bill=$total_num[0]->num;
    if( ceil( $total_bill/$limit)<$page){
        $data=[];

    }else{
    $get_bill=DB::select("SELECT bill.name,bill.bill_id,bill.email,bill.phone,bill.so_luong,bill.create_at,bill.check_in,hotel.hotel_name,bill.status FROM bill  INNER JOIN type_room ON type_room.type_id= bill.type_id INNER JOIN hotel on hotel.hotel_id=type_room.hotel_id
    WHERE cus_id=$id and bill.status=4   order by bill.bill_id desc LIMIT $start,$limit ");
    if(count($get_bill)>=1){
     $i=0;
     foreach($get_bill as $val){
    $data[$i]['name']=$val->name;
    $data[$i]['id_bill']=$val->bill_id;
    $data[$i]['email']=$val->email;
    $data[$i]['phone']=$val->phone;
    $data[$i]['so_phong']=$val->so_luong;
    $data[$i]['check_in']=date('d M,Y', strtotime($val->check_in));
    $data[$i]['date']=date('d', strtotime($val->check_in));
    $data[$i]['month']=date('M', strtotime($val->check_in));
    $data[$i]['hotel_name']=$val->hotel_name;
    $data[$i]['status']=$val->status;
    $i++;
     }
    }else{
        $data=array();
    }
}
    return json_encode($data);

}
          public function api_booking_hotel(Request $request){
        $check_in = date("Y-m-d", strtotime($request->get('check_in')));
		$check_out=date("Y-m-d",strtotime($request->get('check_out')));
		$date1=date_create($check_in);
		$date2=date_create($check_out);
		$diff=date_diff($date1,$date2);
        $so_ngay=$diff->format("%a");
        $id=$request->get('user_id');
        $id_type_room=$request->get('type_room');  
        $total_money=$so_ngay*122;
        $array = DB::select("select * from customer
        where id = ?
        limit 1",[$id]);
            $user['id']= $array[0]->id;
            $user['name']= $array[0]->name;
            $user['gender']= $array[0]->gender;
            $user['phone']= $array[0]->phone;
            $user['address']= $array[0]->address;
            $user['email']= $array[0]->email;
            
        	if($total_money !='') {
                $bill = new Bill();
                $bill->name = $user['name'] ;
                $bill->email= $user['email'];
                $bill->phone=  $user['phone'];
                $bill->cus_id= $user['id'];
                $bill->check_in = $check_in;
                $bill->check_out = $check_out;
                $bill->so_luong=$request->get('num_room');
                $bill->room = $request->get('num_room');
                $bill->total_money=$total_money;
                $bill->type_id= $id_type_room;
                $bill->insert_bill();
                $re= 'success';
            }else{
                $re= 'false';
            }
            
                return json_encode($re);
      
       }
           function view_bill($id){
		$bill = new Bill();
		$bill->bill_id = $id;
        $array_details = $bill->get_details($id);
        $data=json_encode($array_details);
        return $data;
        
	}
	 function cancel_booking($id){
		DB::update('update bill set status = 4 where bill_id = ?', [$id]);
        $data='success';
        return json_encode($data);
	}

}