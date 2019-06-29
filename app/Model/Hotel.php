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
		DB::insert("insert into $this->table(hotel_name,hotel_address,img1,img2,img3,describ)
            values
           (?,?,?,?,?,?)"
            ,[
			$this->hotel_name,
			$this->hotel_address,
			$this->img1,
			$this->img2,
			$this->img3,
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
            img2 = ?,
            img3 = ?,
            describ = ?
            where hotel_id = ?", [
			$this->hotel_name,
			$this->hotel_address,
			$this->img1,
			$this->img2,
			$this->img3,
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
}
