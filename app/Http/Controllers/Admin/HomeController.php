<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    public function login()
    {
       return view('admin.users.login');
    }
    public function contact()
    {
        $allData =  \App\Models\Contact::OrderBy('id','desc')->paginate(30);
       return view('admin.contacts')
                ->with('allData',$allData);
    }
    public function logout($value='')
    {
        Auth::logout();
        return redirect('admin')
                ->with('yes','تم تسجيل الخروج  بنجاح');
    }
    public function postLogin(Request $request)
    {
    	if (Auth::attempt(['username'=>$request->username,'password'=>$request->password])) {
    		return redirect('admin')
    				->with('yes','loged ib successfully');
    	}else{
    		return  back()
    					->with('no','Error in username or password ');
    	}
    }
    public function index($value='')
    {
        return view('admin.index');
    }
    public function profie ()
    {
        $data =  Auth::guard('admin')->User();
        return view('admin.users.profile')
                ->with('data',$data);   
    }
    public function edit (Request $request)
    {
        $data        =  Auth::guard('admin')->User();
        $data->email =  $request->email;
        if ($request->password) {
            $data->password =  \Hash::make($request->password);
        }
        $data->save();
        return back()
                ->with('yes','تم  التعديل بنجاح');   
    }
}
