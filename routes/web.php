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
		Route::get("edit", "postController@edit")->name("post.edit");
		Route::get("update_data", "postController@update_data")->name("post.update_data");
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
		Route::get("process_update", "$controller@process_update")->name("$group.process_update");
		Route::get("update/{id}", "$controller@update")->name("$group.update");
		Route::get("removedata", "$controller@removedata")->name("$group.removedata");
	});
});

// KHach hang
Route::get("search", "AutoCompleteController@index");
Route::get("autocomplete", "AutoCompleteController@search");