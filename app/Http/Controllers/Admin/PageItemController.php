<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageItem;

class PageItemController extends Controller
{
    public function postAdd(Request $request,$id)
    {
    	$request->validate([
    			'image'=>'image|mimes:jpg,png,jpeg,webp,svg',
    			'name'=>'required'
    			]);
    	$data =  new PageItem;
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/pages/'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/pages',$filename);
    		$data->image =  $filename;
    	}
		if ($request->hasFile('light_image')) {
    		$file =  $request->file('light_image');
    		$filename =  'uploads/pages/light_image'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/pages',$filename);
    		$data->image2 =  $filename;
    	}

		if ($request->hasFile('video')) {
    		$file =  $request->file('video');
    		$filename =  'uploads/pages/video'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/pages',$filename);
    		$data->video =  $filename;
    	}
        $data->name          =  $request->name;
        $data->sub_title     =  $request->sub_title;
		$data->sub_title2    =  $request->sub_title2;
        $data->text     =  $request->text;
        $data->page_id  = $id;
    	$data->save();
    	return back()
    			->with('yes',' Added Successfully  ');
    }
    
    public function postEdit(Request $request,$id)
    {
    	$request->validate([
    // 			'image'=>'image|mimes:jpg,png,jpeg,webp',
    			
    			]);
    	$data =  PageItem::find($id);
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/pages/'.time().'.'.$file->getClientoriginalExtension();
    		$file->move('uploads/pages',$filename);
    		$data->image =  $filename;
    	}
		if ($request->hasFile('light_image')) {
    		$file =  $request->file('light_image');
    		$filename =  'uploads/pages/light_image'.time().'.'.$file->getClientoriginalExtension();
    		$file->move('uploads/pages',$filename);
    		$data->image2 =  $filename;
    	}

		if ($request->hasFile('video')) {
    		$file =  $request->file('video');
    		$filename =  'uploads/pages/video'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/pages',$filename);
    		$data->video =  $filename;
			
    	}
        $data->sub_title     =  $request->sub_title;
        $data->sub_title2    =  $request->sub_title2;
        $data->name          =  $request->name;
        $data->text          =  $request->text;
    	$data->save();
    	return back()
    			->with('yes',' Done Successfully');
    }
    public function delete($id)
    {
    	$data =  PageItem::find($id);
    	if ($data) {
    		$data->delete();
    	}
    	return back()
    			->with('yes','Done successfully');
    }
}
