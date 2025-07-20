<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectItem;

class ProjectController extends Controller
{
    public function index()
    {
    	$allData =  Project::OrderBy('id','asc')->paginate(30);
    	return  view('admin.projects.index')
    				->with('allData',$allData)
    				->with('title','All Project');
    }
    public function add()
    {
    	return view('admin.projects.add')
    			->with('title','New Project ');
    }
    public function postAdd(Request $request)
    {
    	$request->validate([
			   'image'=>'image|mimes:jpg,png,jpeg,webp',
			   'image2'=>'image|mimes:jpg,png,jpeg,webp',
    			'name'=>'required'
    			]);
    	$data =  new Project;
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/projects/'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/projects',$filename);
    		$data->image =  $filename;
    	}
		if ($request->hasFile('image2')) {
    		$file =  $request->file('image2');
    		$filename =  'uploads/projects/2'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/projects',$filename);
    		$data->image2 =  $filename;
    	}
		if ($request->hasFile('video')) {
    		$file =  $request->file('video');
    		$filename =  'uploads/projects/video'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/projects',$filename);
    		$data->video =  $filename;
    	}
        $data->name     =  $request->name;
        $data->sub_title     =  $request->sub_title;
        $data->sub_title2     =  $request->sub_title2;
        $data->link     =  $request->link;
        $data->text     =  $request->text;
		$data->text2     =  $request->text2;
    	$data->save();
    	return redirect('admin/projects')
    			->with('yes',' تمت الاضافة بنجاح   ');
    }
    public function edit($id)
    {
    	$data =  Project::find($id);
    	return view('admin.projects.edit')
    			->with('data',$data)
    			->with('title',$data->name);
    }
    public function postEdit(Request $request,$id)
    {
    	$request->validate([
        //'image'=>'mimes:jpg,png,jpeg,webp',
    			
    			]);
    	$data =  Project::find($id);
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/projects/'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/projects',$filename);
    		$data->image =  $filename;
    	}
		if ($request->hasFile('image2')) {
    		$file =  $request->file('image2');
    		$filename =  'uploads/projects/2'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/projects',$filename);
    		$data->image2 =  $filename;
    	}
		if ($request->hasFile('video')) {
    		$file =  $request->file('video');
    		$filename =  'uploads/projects/video'.time().'.'.$file->getClientOriginalExtension();
    		$file->move('uploads/projects',$filename);
    		$data->video =  $filename;
    	}
        $data->name     =  $request->name;
        $data->sub_title     =  $request->sub_title;
        $data->sub_title2     =  $request->sub_title2;
		$data->link     =  $request->link;
        $data->text     =  $request->text;
        $data->text2     =  $request->text2;
    	$data->save();
    	\Cache::forget('Project_'.$data->id);
    	\Cache::forget('projects');
    	return redirect('admin/projects')
    			->with('yes','Done successfully');
    }
    public function delete($id)
    {
    	$data =  Project::find($id);
    	if ($data) {
    		$data->delete();
    	}
    	return back()
    			->with('yes','Done successfully');
    }
}
