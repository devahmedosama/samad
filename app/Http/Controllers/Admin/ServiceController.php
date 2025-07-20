<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
    	$allData =  Service::OrderBy('id','desc')->paginate(30);
    	return  view('admin.services.index')
    				->with('allData',$allData)
    				->with('title','Services');
    }
    public function add()
    {
    	return view('admin.services.add')
    			->with('title','Add new service');
    }
    public function postAdd(Request $request)
    {
    	$request->validate([
    			'image'=>'image|mimes:jpg,png,jpeg',
    			'name'=>'required'
    			]);
    	$data =  new Service;
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/services/'.time().'.jpg';
    		$file->move('uploads/services',$filename);
    		$data->image =  $filename;
    	}
    	if ($request->hasFile('image2')) {
    		$file =  $request->file('image2');
    		$filename =  'uploads/services/2_'.time().'.jpg';
    		$file->move('uploads/services',$filename);
    		$data->image2 =  $filename;
    	}
        $data->name     =  $request->name;
        $data->name_en  =  $request->name_en;
        $data->slug     =  $request->slug;
        $data->slug_en  =  $request->slug_en;
        $data->text     =  $request->text;
        $data->text_en  =  $request->text_en;
        $data->keywords     =  $request->keywords;
        $data->keywords_en  =  $request->keywords_en;
        $data->short_desc     =  $request->short_desc;
        $data->short_desc_en  =  $request->short_desc_en;
    	$data->save();
    	return redirect('admin/services')
    			->with('yes','Done services');
    }
    public function edit($id)
    {
    	$data =  Service::find($id);
    	return view('admin.services.edit')
    			->with('data',$data)
    			->with('title',$data->name);
    }
    public function postEdit(Request $request,$id)
    {
    	$request->validate([
    			'image'=>'image|mimes:jpg,png,jpeg',
    			
    			]);
    	$data =  Service::find($id);
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/services/'.time().'.jpg';
    		$file->move('uploads/services',$filename);
    		$data->image =  $filename;
    	}
    	if ($request->hasFile('image2')) {
    		$file =  $request->file('image2');
    		$filename =  'uploads/services/2_'.time().'.jpg';
    		$file->move('uploads/services',$filename);
    		$data->image2 =  $filename;
    	}
        $data->name     =  $request->name;
        $data->name_en  =  $request->name_en;
        $data->slug     =  $request->slug;
        $data->slug_en  =  $request->slug_en;
        $data->text     =  $request->text;
        $data->text_en  =  $request->text_en;
        $data->keywords     =  $request->keywords;
        $data->keywords_en  =  $request->keywords_en;
        $data->short_desc     =  $request->short_desc;
        $data->short_desc_en  =  $request->short_desc_en;
    	$data->save();
    	return redirect('admin/services')
    			->with('yes','Done successfully');
    }
    public function delete($id)
    {
    	$data =  Service::find($id);
    	if ($data) {
    		$data->delete();
    	}
    	return back()
    			->with('yes','Done successfully');
    }
}
