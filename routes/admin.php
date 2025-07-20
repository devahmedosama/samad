<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use \App\Http\Controllers\Admin as Admin ;

Route::get('login',[Admin\HomeController::class,'login'])->name('login');
Route::post('login',[Admin\HomeController::class,'postLogin']);
Route::get('logout',[Admin\HomeController::class,'logout']);

Route::group(['middleware'=>'auth'],function(){

   Route::get('/',[Admin\HomeController::class,'index']);
   Route::get('contacts',[Admin\HomeController::class,'contact']);

   //posts
   Route::get('posts',[Admin\PostController::class,'index']);
   Route::get('posts/add',[Admin\PostController::class,'add']);
   Route::post('posts/add',[Admin\PostController::class,'postAdd']);
   Route::get('posts/delete/{id}',[Admin\PostController::class,'delete']);
   Route::get('posts/edit/{id}',[Admin\PostController::class,'edit']);
   Route::post('posts/edit/{id}',[Admin\PostController::class,'postEdit']);

   //projects
   Route::get('projects',[Admin\ProjectController::class,'index']);
   Route::get('projects/add',[Admin\ProjectController::class,'add']);
   Route::post('projects/add',[Admin\ProjectController::class,'postAdd']);
   Route::get('projects/delete/{id}',[Admin\ProjectController::class,'delete']);
   Route::get('projects/edit/{id}',[Admin\ProjectController::class,'edit']);
   Route::post('projects/edit/{id}',[Admin\ProjectController::class,'postEdit']);

   //services
   Route::get('services',[Admin\ServiceController::class,'index']);
   Route::get('services/add',[Admin\ServiceController::class,'add']);
   Route::post('services/add',[Admin\ServiceController::class,'postAdd']);
   Route::get('services/delete/{id}',[Admin\ServiceController::class,'delete']);
   Route::get('services/edit/{id}',[Admin\ServiceController::class,'edit']);
   Route::post('services/edit/{id}',[Admin\ServiceController::class,'postEdit']);
   
   
   //packages
   Route::get('packages',[Admin\PackageController::class,'index']);
   Route::get('packages/add',[Admin\PackageController::class,'add']);
   Route::post('packages/add',[Admin\PackageController::class,'postAdd']);
   Route::get('packages/delete/{id}',[Admin\PackageController::class,'delete']);
   Route::get('packages/edit/{id}',[Admin\PackageController::class,'edit']);
   Route::post('packages/edit/{id}',[Admin\PackageController::class,'postEdit']);

   

   //pages
   Route::get('pages',[Admin\PageController::class,'index']);
   Route::get('pages/add',[Admin\PageController::class,'add']);
   Route::post('pages/add',[Admin\PageController::class,'postAdd']);
   Route::get('pages/delete/{id}',[Admin\PageController::class,'delete']);
   Route::get('pages/edit/{id}',[Admin\PageController::class,'edit']);
   Route::post('pages/edit/{id}',[Admin\PageController::class,'postEdit']);


   Route::post('page-items/add/{id}',[Admin\PageItemController::class,'postAdd']);
   Route::get('page-items/delete/{id}',[Admin\PageItemController::class,'delete']);
   Route::post('page-items/edit/{id}',[Admin\PageItemController::class,'postEdit']);
    
   Route::post('project-items/add/{id}',[Admin\ProjectItemController::class,'postAdd']);
   Route::get('project-items/delete/{id}',[Admin\ProjectItemController::class,'delete']);
   Route::post('project-items/edit/{id}',[Admin\ProjectItemController::class,'postEdit']);

   //settings  
	Route::get('settings',[Admin\SettingController::class,'index']);
	Route::post('settings',[Admin\SettingController::class,'edit']);

});