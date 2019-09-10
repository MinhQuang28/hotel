<?php


Route::get("/", function () {
	return view("welcome");
});
Route::get("admin","Controller@view_login")
->name("view_login");
Route::post("process_login","Controller@process_login")
->name("process_login");
// admin
Route::group(["prefix" => "admin", "middleware" => "CheckAdmin"], function(){
	Route::get("logout","Controller@logout")
	->name("logout");
	Route::get("welcome","Controller@welcome")->name('welcome');
	Route::get('profile', function() {
		return view('admin.profile');
	});
	Route::group(["prefix" => "user"], function () {
		$group="user";
		$controller="adminController";
		Route::get("/","$controller@index")->name("$group");
		Route::get("getdata", "$controller@getdata")->name("$group.getdata");
		Route::post("postdata", "$controller@postdata")->name("$group.postdata");
		Route::get("edit/{id}", "$controller@viewedit")->name("$group.edit");
		Route::post("process_update", "$controller@process_update")
		->name("$group.process_update");
		Route::get("removedata", "$controller@removedata")->name("$group.removedata");
	});
// type room
	Route::group(["prefix" => "type"], function () {
		$group="type";
		$controller="typeController";
		Route::get("/", "$controller@index")->name("$group");
		Route::get("getdata", "$controller@getdata")->name("$group.getdata");
		Route::post("postdata", "$controller@postdata")->name("$group.postdata");
		Route::get("fetchdata", "$controller@fetchdata")->name("$group.fetchdata");
		Route::get("removedata", "$controller@removedata")->name("$group.removedata");
		Route::get('insert_detail/{id}',"$controller@insert_detail")->name("$group.insert_detail");
	});
// hotel
	Route::group(["prefix" => "hotel"], function () {
		$group="hotel";
		$controller="hotelController";
		Route::get("/", "$controller@index")->name("$group");
		Route::get("getdata", "$controller@getdata")->name("$group.getdata");
		Route::get("edit/{id}", "$controller@viewEdit")->name("$group.edit");
		Route::get("add", "$controller@view_insert")->name("$group.add");
		Route::post("process_insert", "$controller@process_insert")->name("$group.process_insert");
		Route::post("process_update", "$controller@process_update")->name("$group.process_update");
		Route::get("removedata", "$controller@removedata")->name("$group.removedata");
		Route::get('edit_detail/{id}',"$controller@edit_detail")->name("$group.edit_detail");
	});
// rooom
	Route::group(["prefix" => "room"], function () {
		$group="room";
		$controller="roomController";
		Route::get("/", "$controller@index")->name("$group");
		Route::get("getdata", "$controller@getdata")->name("$group.getdata");
		Route::get("edit/{id}", "$controller@viewEdit")->name("$group.edit");
		Route::get("fetchdata", "$controller@fetchdata")->name("$group.fetchdata");
		Route::post("postdata", "$controller@postdata")->name("$group.postdata");
		Route::post("process_update", "$controller@process_update")->name("$group.process_update");
		Route::get("removedata", "$controller@removedata")->name("$group.removedata");
	});
// Customer
	Route::group(["prefix" => "customer"], function () {
		$group="customer";
		$controller="customerController";
		Route::get("/", "customerController@index")->name("customer");
		Route::get("getdata", "customerController@getdata")->name("customer.getdata");
		Route::post("postdata", "customerController@postdata")->name("customer.postdata");
		Route::get("edit", "customerController@edit")->name("customer.edit");
		Route::get("fetchdata", "customerController@fetchdata")->name("customer.fetchdata");
		Route::get("removedata", "customerController@removedata")->name("customer.removedata");
	});
// post
	Route::group(["prefix" => "post"], function () {
		Route::get("/", "postController@index")->name("post");
		Route::get("getdata", "postController@getdata")->name("post.getdata");
		Route::get("view_add", "postController@view_add")->name("post.view_add");
		Route::post("process_insert", "postController@process_insert")->name("post.process_insert");
		Route::get("edit/{id}", "postController@view_edit")->name("post.edit");
		Route::post("process_update", "postController@process_update")->name("post.process_update");
		Route::get("removedata", "postController@removedata")->name("post.removedata");
	});
// Bill
	Route::group(["prefix" => "bill"], function () {
		$group="bill";
		$controller="billController";
		Route::get("/", "$controller@index")->name("$group");
		Route::get("xuly", "$controller@bill_today")->name("$group.bill_today");
		Route::get("getToday", "$controller@getToday")->name("$group.getToday");	
		Route::get("week", "$controller@bill_week")->name("$group.week");
		Route::get("last_week", "$controller@get_bill_week")->name("$group.last_week");
		Route::get("getdata", "$controller@getdata")->name("$group.getdata");
		Route::get("check_in/{id}", "$controller@viewEdit")->name("$group.check_in");
		Route::post("process_update", "$controller@process_update")->name("$group.process_update");
		Route::get("update/{id}", "$controller@update")->name("$group.update");
		Route::get("removedata", "$controller@removedata")->name("$group.removedata");
	});
});

// KHach hang
Route::get("/", "indexController@index")->name('home');
Route::get('hotels',"indexController@hotels")->name('indexController.hotels');
Route::get("autocomplete", "AutoCompleteController@search");
Route::get('hotel/{id}',"indexController@hotel")->name('indexController@hotel');
Route::get('login',"Controller@login_user")->name('login');
Route::post("process_login_user","Controller@process_login_user")
->name("process_login_user");
Route::post("search","indexController@search")
->name("search");
Route::post("search_room","indexController@search_room")
->name("search_room");
	Route::get('room/{id}',"indexController@rooms")->name('room');

Route::group(["prefix" => "", "middleware" => "CheckUser"], function(){
Route::post('proocess_booking',"indexController@proocess_booking")->name('proocess_booking');
Route::get('thank_you',"indexController@view_comfirm")->name('thank_you');
	});
Route::get('blogs','indexController@show_blog')->name('blogs');

Route::get('about', function(){
	return view('hotel.about');

});Route::get('blog/{id}','indexController@get_one_news')->name('blog');

Route::get('Contact', function(){
	return view('hotel.contact');
});
Route::get('service', function(){
	return view('hotel.service');
});
