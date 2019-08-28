<?php

namespace App\Model;

use DB;

class Customer {
	public $table = 'customer';
	public function get_all() {
		$array = DB::select("select * from $this->table
    		join lop on $this->table.ma_lop = lop.ma_lop");
		return $array;
	}
	public function insert() {
		DB::insert("insert into $this->table(ten_sinh_vien,tuoi,ma_lop)
    		values (?,?,?)", [
			$this->ten_sinh_vien,
			$this->tuoi,
			$this->ma_lop,
		]);

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
	function count_cus(){
		// $count=DB::select("SELECT count(*) FROM bill_detail where id_bill=?",[$id]);
		$count = DB::table('Customer')->where('access', '=', 0)->count();

		return $count;
}
	public function delete() {
		DB::delete("delete from $this->table
            where ma_sinh_vien = ?", [$this->ma_sinh_vien]);
	}
	public function get_one() {
		$array = DB::select("select * from $this->table
            join lop on $this->table.ma_lop = lop.ma_lop
            where ma_sinh_vien = ?
            limit 1", [$this->ma_sinh_vien]);
		return $array[0];
	}
	public function update() {
		DB::update("update $this->table
            set
            ten_sinh_vien = ?,
            tuoi = ?,
            ma_lop = ?
            where ma_sinh_vien = ?", [
			$this->ten_sinh_vien,
			$this->tuoi,
			$this->ma_lop,
			$this->ma_sinh_vien,
		]);
	}
}
