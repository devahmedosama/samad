<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
class SettingController extends Controller
{
    public function index($value='')
    {
    	$data =  Setting::first();
    	return view('admin.setting')
    			->with('data',$data)
				->with('title',$data->name)
    			;
    }
    public function edit(Request $request)
    {
    	$data              =  Setting::first();
    	$data->name        =  $request->name;
    	$data->facebook    =  $request->facebook;
    	$data->instagram   =  $request->instagram;
    	$data->tiktok      =  $request->tiktok;
    	$data->x           =  $request->x;
    	$data->text        =  $request->text;
    	$data->keywords    =  $request->keywords;
    	if ($request->hasFile('logo')) {
    		 $file =  $request->file('logo');
    		 $filename  =  'uploads/posts/logo'.'.'.$file->getClientOriginalExtension();
    		 $file->move('uploads/posts',$filename);
    		 $data->logo = $filename;
    	}
    	if ($request->hasFile('fav')) {
    		 $file =  $request->file('fav');
    		 $filename  =  'uploads/posts/fav.'.$file->getClientOriginalExtension();
    		 $file->move('uploads/posts',$filename);
    		 $data->fav = $filename;
    	}
		if ($request->hasFile('share')) {
			$file =  $request->file('share');
			$filename  =  'uploads/posts/share.'.$file->getClientOriginalExtension();
			$file->move('uploads/posts',$filename);
			$data->share = $filename;
	    }
    	$data->save();
    	return back()
    			->with('yes','Updated Successfully');
    }
}
