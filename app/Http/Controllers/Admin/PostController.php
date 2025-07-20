<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
    	$allData =  Post::OrderBy('id','desc')->paginate(30);
    	return  view('admin.posts.index')
    				->with('allData',$allData)
    				->with('title','All Post');
    }
    public function add()
    {
    	return view('admin.posts.add')
    			->with('title',' Add New Post ');
    }
    public function postAdd(Request $request)
    {
    	$request->validate([
    			'image'=>'image|mimes:jpg,png,jpeg',
    			'name'=>'max:200',
    			'category'=>'max:200',
    			'category_en'=>'max:200',
    			'keywords'=>'max:200',
    			'keywords_en'=>'max:200',
    			]);
    	$data =  new Post;
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/posts/'.time().'.jpg';
    		$file->move('uploads/posts',$filename);
    		$data->image =  $filename;
    	}
        $data->name        =  $request->name;
		$data->name_en     =  $request->name_en;
        $data->keywords        =  $request->keywords;
		$data->keywords_en     =  $request->keywords_en;
        $data->category        =  $request->category;
		$data->category_en     =  $request->category_en;
		$data->slug        =  $request->slug;
		$data->slug_en     =  $request->slug_en;
        $data->text_en     =  $request->text_en;
		$data->text        =  $request->text;
        $data->date        =  $request->date;
    	$data->save();
    	return redirect('admin/posts')
    			->with('yes',' Added Successfully  ');
    }
    public function edit($id)
    {
    	$data =  Post::find($id);
    	return view('admin.posts.edit')
    			->with('data',$data)
    			->with('title',$data->name);
    }
    public function postEdit(Request $request,$id)
    {
    	$request->validate([
    			'image'=>'image|mimes:jpg,png,jpeg',
    			'name'=>'max:200',
    			'category'=>'max:200',
    			'category_en'=>'max:200',
    			'keywords'=>'max:200',
    			'keywords_en'=>'max:200',
    			]);
    	$data =  Post::find($id);
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/posts/'.time().'.jpg';
    		$file->move('uploads/posts',$filename);
    		$data->image =  $filename;
    	}
        $data->name        =  $request->name;
		$data->name_en     =  $request->name_en;
		$data->keywords        =  $request->keywords;
		$data->keywords_en     =  $request->keywords_en;
        $data->category        =  $request->category;
		$data->category_en     =  $request->category_en;
		$data->slug        =  $request->slug;
		$data->slug_en     =  $request->slug_en;
        $data->text_en     =  $request->text_en;
		$data->text        =  $request->text;
        $data->date        =  $request->date;
    	$data->save();
    	return redirect('admin/posts')
    			->with('yes',' Done Successfully');
    }
    public function delete($id)
    {
    	$data =  Post::find($id);
    	if ($data) {
    		$data->delete();
    	}
    	return back()
    			->with('yes','Done successfully');
    }
}
