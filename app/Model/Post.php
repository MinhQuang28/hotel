<?php

namespace App\Model;
use DB;
use Illuminate\Database\Eloquent\Model;
class Post {
	public $table = 'post';
	public function get_all() {
		$array = DB::select("select * from $this->table ");
		return $array;
	}
	public function insert() {
		DB::insert("INSERT into post (title, img1,content,author,url_post) values (?,?,?,?,?)", [
			$this->title,
			$this->img1,
			$this->content,
			$this->author,
			$this->url_post
		]);
	}
	public function delete() {
		DB::delete("delete from $this->table
            where ma_sinh_vien = ?", [$this->ma_sinh_vien]);
	}
	public function getOne($id) {
		$array =DB::select("select * from $this->table
            where id = ?
            limit 1", [$id]);
		return $array[0];
	}
	public function update() {
		DB::update("update $this->table
            set
            title = ?,
            img1 = ?,
            content = ?,
            author= ?,
            url_post=?
            where id = ?", [
            $this->title,
            $this->img1,
            $this->content,
            $this->author,
            $this->url_post,
			$this->id,
		]);
	}
}
