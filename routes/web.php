<?php

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

//backend
Route::get('admin','admin\HomeController@index');
Route::get('admin/create','admin\HomeController@create');
Route::post('admin/store','admin\HomeController@store');
Route::get('admin/edit/{id}','admin\HomeController@edit');
Route::post('admin/update/{id}','admin\HomeController@update');
Route::get('admin/getProvince','admin\HomeController@getProvince');

Route::get('admin/province','admin\ProvinceController@index');
Route::get('admin/province/create','admin\ProvinceController@create');
Route::post('admin/province/store','admin\ProvinceController@store');

//frontend
Route::get('/','HomeController@index');
Route::get('/home/getProvince','HomeController@getProvince');
Route::get('/locate','HomeController@locate');
Route::post('/postLocate/','HomeController@postLocate');

//Auto create hotline
Route::get('hanoi','admin\HomeController@hanoi');
Route::get('thainguyen','admin\HomeController@thainguyen');

Route::get('test',function (){
    return view('test');
});

