<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Project;
use Cache;
class HomeController extends Controller
{
    public function index(){
        $time = 1;
       return  Cache::remember('home_1',$time,function(){
                    $page1  =   Page::find(1);
                    $page2  =   Page::find(2);
                    $page3  =   Page::find(3);
                    $page4  =   Page::find(4);
                    $page5  =   Page::find(5);
                    $page6  =   Page::find(6);
                    $page7  =   Page::find(7);
                    $page8  =   Page::find(8);
                    $page9  =   Page::find(9);
                    $page10 =   Page::find(10);
                    return view('site.home',
                              [
                                'page1'=>$page1,
                                'page2'=>$page2,
                                'page3'=>$page3,
                                'page4'=>$page4,
                                'page5'=>$page5,
                                'page6'=>$page6,
                                'page7'=>$page7,
                                'page8'=>$page8,
                                'page9'=>$page9,
                                'page10'=>$page10,
                              ])->render()
                                ;
                });
        
    }
    public function work(){
        $time = 1;
       return  Cache::remember('works',$time,function(){
                   $allData = Project::paginate(6);
                   $page    = Page::find(11);
                   return view('site.pages.work',[
                    'allData'=>$allData,
                    'page'=>$page,
                    'title'=>$page->name
                   ])->render();         
                });
    }
    public function single_project($id)  {
       $time = 1;
       $html =   Cache::remember('single_work_'.$id,$time,function() use($id){
                   $data = Project::find($id);
                   return view('site.pages.single',[
                    'data'=>$data,
                    'title'=>$data->name
                   ])->render();         
                });
        return response($html);
    }
    public function agency() {
        $time = 1;
        $html =   Cache::remember('agency_',$time,function(){
                   $page13 = Page::find(13);
                   $page14 = Page::find(14);
                   $page5 = Page::find(5);
                   $page15 = Page::find(15);
                   $page16 = Page::find(16);
                   $page17 = Page::find(17);
                   $page18 = Page::find(18);
                   $page9 = Page::find(9);
                   $page8 = Page::find(8);
                   return view('site.pages.agency',[
                                  'title'=>'Our agency',
                                  'page13'=>$page13,
                                  'page14'=>$page14,
                                  'page5'=>$page5,
                                  'page15'=>$page15,
                                  'page16'=>$page16,
                                  'page17'=>$page17,
                                  'page18'=>$page18,
                                  'page8'=>$page8,
                                  'page9'=>$page9,
                                ])->render();         
                });
        return response($html);
    }
    public function approach()  {
       $time = 1;
       $html =   Cache::remember('approach_',$time,function(){
                   $page19 = Page::find(19);
                   $page20 = Page::find(20);
                   $page21 = Page::find(21);
                   $page22 = Page::find(22);
                   $page23 = Page::find(23);
                   return view('site.pages.approach',[
                    'title'=>'Approach',
                    'page19'=>$page19,
                    'page20'=>$page20,
                    'page21'=>$page21,
                    'page22'=>$page22,
                    'page23'=>$page23,
                   ])->render();         
                });
        return response($html);
    }
}
