<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function index()
    {
    	$allData =  Package::OrderBy('id','desc')->paginate(30);
    	return  view('admin.packages.index')
    				->with('allData',$allData)
    				->with('title','Packages');
    }
    public function add()
    {
    	return view('admin.packages.add')
    			->with('title','Add new package');
    }
    public function postAdd(Request $request)
    {
    	$request->validate([
    			'image'=>'image|mimes:jpg,png,jpeg',
    			'name'=>'required'
    			]);
    	$data =  new Package;
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/packages/'.time().'.jpg';
    		$file->move('uploads/packages',$filename);
    		$data->image =  $filename;
    	}
    	if ($request->hasFile('image2')) {
    		$file =  $request->file('image2');
    		$filename =  'uploads/packages/2'.time().'.jpg';
    		$file->move('uploads/packages',$filename);
    		$data->image2 =  $filename;
    	}
        $data->name     =  $request->name;
        $data->location     =  $request->location;
        $data->year     =  $request->year;
        $data->service     =  $request->service;
        $data->name_en  =  $request->name_en;
        $data->slug     =  $request->slug;
        $data->slug_en  =  $request->slug_en;
        $data->text     =  $request->text;
        $data->text_en  =  $request->text_en;
    	$data->save();
    	return redirect('admin/packages')
    			->with('yes','Done successfully');
    }
    public function edit($id)
    {
    	$data =  Package::find($id);
    	return view('admin.packages.edit')
    			->with('data',$data)
    			->with('title',$data->name);
    }
    public function postEdit(Request $request,$id)
    {
    	$request->validate([
    			'image'=>'image|mimes:jpg,png,jpeg',
    			
    			]);
    	$data =  Package::find($id);
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/packages/'.time().'.jpg';
    		$file->move('uploads/packages',$filename);
    		$data->image =  $filename;
    	}
    	if ($request->hasFile('image2')) {
    		$file =  $request->file('image2');
    		$filename =  'uploads/packages/2'.time().'.jpg';
    		$file->move('uploads/packages',$filename);
    		$data->image2 =  $filename;
    	}
        $data->name     =  $request->name;
		$data->location     =  $request->location;
        $data->year     =  $request->year;
        $data->service     =  $request->service;
        $data->name_en  =  $request->name_en;
        $data->slug     =  $request->slug;
        $data->slug_en  =  $request->slug_en;
        $data->text     =  $request->text;
        $data->text_en  =  $request->text_en;
    	$data->save();
    	return redirect('admin/packages')
    			->with('yes',' Done successfully');
    }
    public function delete($id)
    {
    	$data =  Package::find($id);
    	if ($data) {
    		$data->delete();
    	}
    	return back()
    			->with('yes','Done successfully');
    }
}
