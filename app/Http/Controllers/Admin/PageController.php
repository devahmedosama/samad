<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
    	$allData =  Page::OrderBy('id','asc')->paginate(30);
    	return  view('admin.pages.index')
    				->with('allData',$allData)
    				->with('title','All Page');
    }
    public function add()
    {
    	return view('admin.pages.add')
    			->with('title','New Page ');
    }
    public function postAdd(Request $request)
    {
    	$request->validate([
			   'image'=>'image|mimes:jpg,png,jpeg',
			   'image2'=>'image|mimes:jpg,png,jpeg',
			   'image3'=>'image|mimes:jpg,png,jpeg',
			   'video'=>'mimes:mp4,mov,ogg | max:20000',
			   'audio'=>'mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',
    			'name'=>'required'
    			]);
    	$data =  new Page;
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/pages/'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/pages',$filename);
    		$data->image =  $filename;
    	}
		if ($request->hasFile('image2')) {
    		$file =  $request->file('image2');
    		$filename =  'uploads/pages/2'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/pages',$filename);
    		$data->image2 =  $filename;
    	}
		
        $data->name     =  $request->name;
        $data->sub_title     =  $request->sub_title;
        $data->sub_title2     =  $request->sub_title2;
        $data->text     =  $request->text;
    	$data->save();
    	return redirect('admin/pages')
    			->with('yes',' تمت الاضافة بنجاح   ');
    }
    public function edit($id)
    {
    	$data =  Page::find($id);
    	return view('admin.pages.edit')
    			->with('data',$data)
    			->with('title',$data->name);
    }
    public function postEdit(Request $request,$id)
    {
    	$request->validate([
    // 			'image'=>'mimes:jpg,png,jpeg,webp',
    			
    			]);
    	$data =  Page::find($id);
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/pages/'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/pages',$filename);
    		$data->image =  $filename;
    	}
		if ($request->hasFile('image2')) {
    		$file =  $request->file('image2');
    		$filename =  'uploads/pages/2'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/pages',$filename);
    		$data->image2 =  $filename;
    	}
		if ($request->hasFile('image3')) {
    		$file =  $request->file('image3');
    		$filename =  'uploads/pages/3'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/pages',$filename);
    		$data->image3 =  $filename;
    	} 
		if ($request->hasFile('video')) {
    		$file =  $request->file('video');
    		$filename =  'uploads/pages/video'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/pages',$filename);
    		$data->video =  $filename;  
    	}
		if ($request->hasFile('video2')) {
    		$file =  $request->file('video2');
    		$filename =  'uploads/pages/video2'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/pages',$filename);
    		$data->video2 =  $filename;  
    	}
        $data->name     =  $request->name;
        $data->sub_title     =  $request->sub_title;
        $data->sub_title2     =  $request->sub_title2;
        $data->text     =  $request->text;
    	$data->save();
    	\Cache::forget('page_'.$data->id);
    	\Cache::forget('pages');
    	return redirect('admin/pages')
    			->with('yes','Done successfully');
    }
    public function delete($id)
    {
    	$data =  Page::find($id);
    	if ($data) {
    		$data->delete();
    	}
    	return back()
    			->with('yes','Done successfully');
    }
}
