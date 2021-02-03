<?php

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


// HomeController
Route::get('/index','App\Http\Controllers\HomeController@home');

// DashboardController
Route::get('/','App\Http\Controllers\DashboardController@index');

Route::get('/login','App\Http\Controllers\FormsController@register');

// BAdminController
Route::get('/admin','App\Http\Controllers\BAdminController@adminpage');

// CategoryController
Route::get('/category','App\Http\Controllers\CategoryController@index');
// StoresController
Route::get('/stores','App\Http\Controllers\StoresController@index');
// BOrdersController
Route::get('/orders','App\Http\Controllers\BOrdersController@index');

// BOrdersController
Route::get('/chat','App\Http\Controllers\BChatController@index');

// BCouponController
Route::get('/coupon','App\Http\Controllers\BCouponController@index');

// BStoryController
Route::get('/story','App\Http\Controllers\BStoryController@index');


//admin_insert data
Route::post('saveuserdetails','App\Http\Controllers\AdminInsertController@saveuserdetails');

//Route::post('saveuserdetails', 'App\Http\Controllers\BAdminController@save_user_details');  // create user route




