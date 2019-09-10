<?php

namespace App\Model;

use DB;

class Bill {
	public $bill = 'bill';
	public $detail = 'bill_detail';
	public $room = 'room';
	public $customer = 'customer';
	public function get_all() {
		$array = DB::select("SELECT * FROM bill INNER JOIN customer on customer.id=bill.cus_id  ");
		return $array;
	}
	public function get_today() {
		$array = DB::select("SELECT * FROM bill INNER JOIN customer on customer.id=bill.cus_id Where status=0 or status=1 and check_in=CURDATE() or check_out=CURDATE() and status=3 ");
		return $array;
	}public function get_week() {
		$array = DB::select("SELECT * FROM `bill`INNER JOIN customer on customer.id=bill.cus_id WHERE create_at>=CURRENT_DATE()-7  ");
		return $array;
	}
	public function get_hotel() {
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
		$array = DB::select("SELECT * from $this->bill  INNER JOIN customer on customer.id=bill.cus_id inner join type_room on bill.type_id=type_room.type_id

            where bill_id = ?
            limit 1", [$this->bill_id]);

		return $array[0];
	}
		public function get_id_room() {
		$array = DB::select("SELECT * from bill_detail inner join room on bill_detail.room_id=room.room_id

            where id_bill = ?
            ", [$this->id_bill]);
		return $array;
		// lay phong con trong trong 1 khach san
	}
	function count_booking($id){
		// $count=DB::select("SELECT count(*) FROM bill_detail where id_bill=?",[$id]);
		$count = DB::table('bill_detail')->where('id_bill',$id)->count();
		return $count;
}function count_bill(){
		// $count=DB::select("SELECT count(*) FROM bill_detail where id_bill=?",[$id]);
		$count = DB::table('bill')->where('create_at', '>=', '2019-8-20')->count();

		return $count;
}
function count_new(){
		// $count=DB::select("SELECT count(*) FROM bill_detail where id_bill=?",[$id]);
		$count = DB::table('bill')->where('status', '=', 2)->count();

		return $count;
}
function new_oder(){
		// $count=DB::select("SELECT count(*) FROM bill_detail where id_bill=?",[$id]);
		$count = DB::select('SELECT * from bill INNER JOIN customer on customer.id=bill.cus_id where status=0 or status=1 ORDER by create_at DESC');

		return $count;
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
    public function get_one_bill($id) {
        $array = DB::select("SELECT * from $this->bill  INNER JOIN customer on customer.id=bill.cus_id inner join type_room on bill.type_id=type_room.type_id
left join hotel on hotel.hotel_id=type_room.hotel_id

            where bill_id = ?
            ORDER by bill.bill_id DESC
            limit 1", [$id]);

        return $array[0];
    }
	public function insert_bill() {
		DB::insert("INSERT INTO  bill(name,email,phone,cus_id,total_money,check_in,check_out,type_id,so_luong,status)
            VALUES (?,?,?,?,?,?,?,?,?,?)"
          , [
			$this->name,
			$this->email,
			$this->phone,
			$this->cus_id,
			$this->total_money,
			$this->check_in,
			$this->check_out,
			$this->type_id,
			$this->so_luong,
			0
		]);
	}
	public function update_bill(){
		DB::update('UPDATE bill set name=? ,phone=?,email=?,total_money=?,so_luong=?,check_in=?,check_out=?,status=? where bill_id = ?', [$this->name,$this->phone,$this->email,$this->money,$this->so_luong,$this->check_in,$this->check_out,$this->status,$this->bill_id]);
	}

}
