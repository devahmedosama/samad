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
use App\Http\Controllers\Site as Site;

Route::get('/',[Site\HomeController::class,'index']); 
Route::get('our-agency',[Site\HomeController::class,'agency']);
Route::get('approach',[Site\HomeController::class,'approach']);
Route::get('work',[Site\HomeController::class,'work']);
Route::get('single-project/{id}',[Site\HomeController::class,'single_project']);
