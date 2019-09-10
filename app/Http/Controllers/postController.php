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
		
		$post =DB::select("select * from post  ");
		return Datatables::of($post)
            ->editColumn('create_at', function ($post) {
                //change over here
                return date('d/m/Y H:m:s', strtotime($post->create_at));
            })

		->addColumn('action', function ($post) {
			return '<a href="post/edit/' . $post->id . '" class="btn btn-sm btn-primary edit"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="#" class="btn btn-sm btn-danger delete" id="' . $post->id . '"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
		})
		
		->make(true);
	}

	
	function view_add() {
		$post = new Type();
		$post = $post->get_all();

		return view("admin/new_post");
	}
	function process_insert(Request $request) {
		$image_name = $request->hidden_image;
		$image1 = $request->file('image1');
		if ($image1 !='') {
			$image_name1 = rand() . '.' . $image1->getClientOriginalExtension();
			$image1->move(public_path('images'), $image_name1);
			$post = new Post();
			$post->title = $request->get('title');
			$post->content = $request->get('describ');
			$post->img1 = $image_name1;
            $post->author=$request->get('author');
			$post->type_room=$request->get('type');
			$post->url_post = $request->get('url_post');
			$post->insert();
		} else {
			$request->validate([
				'image1' => 'required|image|max:2048',
				'title' => 'required',
				'url_post' => 'required',
			]);
		}
		return redirect('admin/post')->with('messages', 'Data is successfully inserted');

	}
	function  view_edit($id){
	    $post= new Post();
	    $info_post=$post->getOne($id);
	    return view('admin.edit_post',['post'=>$info_post]);
    }

    function process_update(Request $request) {
        $image_name = $request->hidden_image;
        $image1 = $request->file('image1');
        if ($image1 !='') {
            $image_name1 = rand() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('images'), $image_name1);
            $post = new Post();
            $post->title = $request->get('title');
            $post->content = $request->get('describ');
            $post->img1 = $image_name1;
            $post->author=$request->get('author');
            $post->type_room=$request->get('type');
            $post->url_post = $request->get('url_post');
            $post->update();
        } elseif($image1 =''){
            $post = new Post();
            $post->title = $request->get('title');
            $post->content = $request->get('describ');
            $post->img1 = $image_name1;
            $post->author=$request->get('author');
            $post->type_room=$request->get('type');
            $post->url_post = $request->get('url_post');
            $post->update1();
        }
        else{
            $request->validate([
               
                'title' => 'required',
                'url_post' => 'required',
            ]);
        }
        return redirect('admin/post')->with('messages', 'Data is successfully inserted');

    }


	function removedata(Request $request) {
		// $student = Student::find($request->input('id'));
		$que = DB::table('post')->where('id', $request->input('id'))->delete();
		if ($que) {
			echo 'Data Deleted';
		}
	}
}
