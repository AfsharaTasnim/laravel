<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[HomeController::class,'index']);
Route::get('admin/login',[AdminController::class,'login']);
Route::group(['prefix'=>'admin','middleware'=>'authcheck'],function(){
    Route::get('/dashboard',[AdminController::class,'index']);
    Route::get('/manager',[AdminController::class,',manager']);
});