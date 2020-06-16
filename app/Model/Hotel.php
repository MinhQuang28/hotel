<?php

namespace App\Model;

use DB;

class Hotel {
	public $table = 'hotel';
	public function get_all() {
		$array = DB::select("select * from $this->table");
		return $array;
	}
	public function insert() {
		DB::insert("INSERT into $this->table(hotel_name,hotel_address,img1,describ)
            values
           (?,?,?,?,?,?)"
            ,[
			$this->hotel_name,
			$this->hotel_address,
			$this->img1,
			// $this->img2,
			// $this->img3,
			$this->describ,
			$this->hotel_id
		]);
	}

	public function get_one() {
		$array = DB::select("select * from $this->table
            where hotel_id = ?
            limit 1", [$this->hotel_id]);
		return $array[0];
	}
	public function update() {
		DB::update("update $this->table
            set
            hotel_name = ?,
            hotel_address = ?,
            img1 = ?,
            describ = ?
            where hotel_id = ?", [
			$this->hotel_name,
			$this->hotel_address,
			$this->img1,
			// $this->img2,
			// $this->img3,
			$this->describ,
			$this->hotel_id,
		]);
	}
	public function update1() {
		DB::update("update $this->table
            set
            hotel_name = ?,
            hotel_address = ?,
            describ = ?
            where hotel_id = ?", [
			$this->hotel_name,
			$this->hotel_address,
			$this->describ,
			$this->hotel_id,
		]);
	}


	// show tren khach hang
	public function limit_hotel(){
		$array = DB::select("select * from $this->table limit 0,5");
		return $array;
	}
	public function get_hotel($id){
		$array= DB::select("SELECT * from hotel where url_hotel='$id'");
		return $array[0];
	}
	public function get_hotel_id($id){
		$array= DB::select("SELECT * from hotel where hotel_id='$id'");
		return $array[0];
	}
	public function info_hotel($id){
		$array=DB::select('select info_hotel.img,info_hotel.img1,info_hotel.img2,info_hotel.img3,overview,info_hotel.service,info_hotel.restaurant from info_hotel inner join hotel on hotel.hotel_id=info_hotel.id_hotel where url_hotel = ?', [$id]);
		return $array[0];
	}
	public function info_hotel_id($id){
		$array=DB::select('select info_hotel.img,info_hotel.img1,info_hotel.img2,info_hotel.img3,overview,info_hotel.service,info_hotel.restaurant from info_hotel inner join hotel on hotel.hotel_id=info_hotel.id_hotel where hotel_id = ?', [$id]);
		return $array[0];
	}
	public function get_info($id){ 
		$arr=DB::select('select * from info_hotel where id_hotel = ? limit 1', [$id]);
		return $arr['0'];
		 
	}
}
