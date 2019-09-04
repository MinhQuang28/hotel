<?php

namespace App\Model;

use DB;

class Type {
	public $table = 'type_room';
	public function get_all() {
		$array = DB::select("select * from $this->table inner join hotel on $this->table.hotel_id=hotel.hotel_id ");
		return $array;
	}
	public function insert() {
		DB::insert("insert into $this->table('type_id', 'name', 'type_name','price','gender', 'birth', 'access', 'status')
    		values (?,?,?)", [
			$this->id,
			$this->name,
			$this->email,
			$this->pass,
			$this->birth,
			$this->access,
			$this->status,
		]);
	}
	public function delete() {
		DB::delete("delete from $this->table
            where ma_sinh_vien = ?", [$this->ma_sinh_vien]);
	}
	public function get_one() {
		$array = DB::select("select * from $this->table

            where type_id = ?
            limit 1", [$this->id]);
		return $array[0];
	}
	public function get_room($id){
		$room= DB::select("SELECT * from type_room inner join info_room on type_room.type_id=info_room.id_type where type_id = ?
            limit 1", [$id]);
		return $room[0];
	}
	public function find_bed($bed,$id){
		$bed=DB::select("SELECT * FROM type_room inner join hotel on hotel.hotel_id=type_room.hotel_id where hotel.hotel_id=$id and bed=$bed");
		return $bed;
	}
	
}
