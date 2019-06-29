<?php

namespace App\Model;

use DB;

class Post {
	public $table = 'post';
	public function get_all() {
		$array = DB::select("select * from $this->table");
		return $array;
	}
	public function insert() {
		DB::insert("insert into $this->table('title', 'img1','','img2', 'img3', 'type_room', 'content')
    		values (?,?,?)", [
			$this->title,
			$this->img1,
			$this->img1,
			$this->img1,
			$this->type_room,
			$this->content,
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
