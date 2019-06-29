<?php

namespace App\Model;

use DB;
use Illuminate\Database\Eloquent\Model;

class Room {
	public $table = 'Room';
	public function get_all() {
		$array = DB::select("select * from $this->table");
		return $array;
	}
	public function insert() {
		DB::insert("insert into $this->table('id', 'name', 'email','pass','gender', 'birth', 'access', 'status')
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

	public function get_all_in_type() {
		$array = DB::select("select * from $this->table

            where room_status=0 and type_id = ?", [$this->type_id]);
		return $array;
	}
	public function update() {
		DB::update("update $this->table
            set
            name = ?,
            email = ?,
            pass = ?,
            gender=?,
            birth=?,
            status=?
            where id = ?", [
			$this->name,
			$this->email,
			$this->pass,
			$this->gender,
			$this->birth,
			$this->status,
			$this->id,
		]);
	}
}
