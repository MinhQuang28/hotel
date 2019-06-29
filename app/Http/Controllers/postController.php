<?php

namespace App\Http\Controllers;
use App\Model\Post;
use App\Model\Type;
use DB;
use Illuminate\Http\Request;
use Validator;
use Yajra\Datatables\Datatables;

class postController extends Controller {
	
	function index() {
		return view('admin.post');
	}

	function getdata() {
		
		$post =DB::select("select * from post INNER join type_room on post.type_room=type_room.type_id ");
		return Datatables::of($post)
		

		->addColumn('action', function ($post) {
			return '<a href="post/edit/' . $post->id . '" class="btn btn-sm btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="#" class="btn btn-sm btn-danger delete" id="' . $post->id . '"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
		})
		
		->make(true);
	}

	
	function view_add() {
		$post = new Type();
		$post = $post->get_all();

		return view("admin/new_post", [
			'type' => $post,

		]);
	}
	function process_insert(Request $request) {
		$validation = Validator::make($request->all(), [
			'title' => 'required',
			'type_room' => 'required',
		]);
		$post = new Post();
		$post->title = $request->get('name');
		$post->email = $request->get('email');
		$post->gender = $request->get('gender');
		$post->pass = $request->get('pass');
		$post->birth = $request->get('birth');
		$post->status = $request->get('status');
		$post->insert();
		return redirect('post')->with('messages', 'Data is successfully updated');

	}function process_update(Request $request) {
		$post = new Post();
		$post->id = $request->get('id');
		$post->name = $request->get('name');
		$post->email = $request->get('email');
		$post->gender = $request->get('gender');
		$post->pass = $request->get('pass');
		$post->birth = $request->get('birth');
		$post->status = $request->get('status');
		$post->update();
		return redirect('post')->with('messages', 'Data is successfully updated');

	}

	function removedata(Request $request) {
		// $student = Student::find($request->input('id'));
		$que = DB::table('post')->where('id', $request->input('id'))->delete();
		if ($que) {
			echo 'Data Deleted';
		}
	}
}
