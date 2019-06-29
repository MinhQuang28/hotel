<?php

namespace App\Model;

use DB;

class Bill {
	public $bill = 'bill';
	public $detail = 'bill_detail';
	public $room = 'room';
	public $customer = 'customer';
	public function get_all() {
		$array = DB::select("select * FROM bill INNER JOIN customer on customer.id=bill.cus_id");
		return $array;
	}public function get_hotel() {
		$hotel_name = DB::select(" SELECT hotel.hotel_id from hotel INNER JOIN room on hotel.hotel_id=room.hotel_id INNER JOIN bill_detail ON bill_detail.room_id=room.room_id WHERE bill_detail.room_id=1 and id_bill=1 ");
		return $hotel_name;
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
		$array = DB::select("select * from $this->bill  INNER JOIN customer on customer.id=bill.cus_id inner join type_room on bill.type_id=type_room.type_id

            where bill_id = ?
            limit 1", [$this->bill_id]);

		return $array[0];
	}
		public function get_id_room() {
		$array = DB::select("select * from bill_detail inner join room on bill_detail.room_id=room.room_id

            where id_bill = ?
            ", [$this->id_bill]);
		return $array;
		// lay phong con trong trong 1 khach san
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

}
