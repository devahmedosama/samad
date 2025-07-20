<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	$allData =  Category::OrderBy('id','desc')->paginate(30);
    	return  view('admin.categories.index')
    				->with('allData',$allData)
    				->with('title','الأقسام');
    }
    public function add()
    {
    	return view('admin.categories.add')
    			->with('title',' إضافة قسم  جديد   ');
    }
    public function postAdd(Request $request)
    {
    	$request->validate([
    			'image'=>'image|mimes:jpg,png,jpeg',
    			'name'=>'required'
    			]);
    	$data =  new Category;
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/categories/'.time().'.jpg';
    		$file->move('uploads/categories',$filename);
    		$data->image =  $filename;
    	}
        $data->name     =  $request->name;
        $data->text     =  $request->text;
        $arr = $request->old_sliders??[];
        if ($request->hasFile('sliders')) {
            foreach ($request->file('sliders') as $key => $file) {
                $filename =  'uploads/categories/'.$key.'_'.time().'.'
                                        .$file->getClientOriginalExtension();
                $img  =  \Image::make($file->getRealPath());
                if ($img->width() > 1000) {
                    $img->widen(1000);
                }
                $img->save($filename);
                array_push($arr,$filename);
            }
        }
        $data->sliders     =  json_encode($arr);
    	$data->save();
    	return redirect('admin/categories')
    			->with('yes',' تم  الاضافة بنجاح   ');
    }
    public function edit($id)
    {
    	$data =  Category::find($id);
    	return view('admin.categories.edit')
    			->with('data',$data)
    			->with('title',$data->name);
    }
    public function postEdit(Request $request,$id)
    {
    	$request->validate([
    			'image'=>'image|mimes:jpg,png,jpeg',
    			
    			]);
    	$data =  Category::find($id);
    	if ($request->hasFile('image')) {
    		$file =  $request->file('image');
    		$filename =  'uploads/categories/'.time().'.jpg';
    		$file->move('uploads/categories',$filename);
    		$data->image =  $filename;
    	}
        $arr = $request->old_sliders??[];
        if ($request->hasFile('sliders')) {
            foreach ($request->file('sliders') as $key => $file) {
                $filename =  'uploads/categories/'.$key.'_'.time().'.'
                                        .$file->getClientOriginalExtension();
                $img  =  \Image::make($file->getRealPath());
                if ($img->width() > 1000) {
                    $img->widen(1000);
                }
                $img->save($filename);
                array_push($arr,$filename);
            }
        }
        $data->sliders     =  json_encode($arr); 
        $data->name      =  $request->name;
        $data->text      =  $request->text;
    	$data->save();
    	return redirect('admin/categories')
    			->with('yes','Done successfully');
    }
    public function delete($id)
    {
    	$data =  Category::find($id);
    	if ($data) {
    		$data->delete();
    	}
    	return back()
    			->with('yes','Done successfully');
    }
}
