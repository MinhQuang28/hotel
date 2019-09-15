<?php

namespace App\Model;

use DB;

class Admin {
	public $table = 'admin';
	public function get_all() {
		$array = DB::select("select * from $this->table ");
		return $array;
	}public function get_feed_back() {
		$array = DB::select("select * from feed_back ");
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
	public function get_one() {
		$array = DB::select("select * from $this->table

            where id = ?
            limit 1", [$this->id]);
		return $array[0];
	}
	 public function get_login()
    {
    	$array = DB::select("select * from $this->table
    		where email = ? and pass = ?
    		limit 1",[
    			$this->email,
    			$this->pass
    		]);
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
	public function get_info($id)
	{
		$array_info = DB::select("select * from $this->table
            where id = ?
            limit 1", [$id]);
		
		return $array_info[0];
	}

	public function profile_update()
	{
		DB::update("update $this->table
            set
            name = ?,
            email = ?,
            birth=?,
            SDT = ?
            where id = ?", [
			$this->name,
			$this->email,
			$this->birth,
			$this->SDT,
			$this->id,
		]);
	}
}
