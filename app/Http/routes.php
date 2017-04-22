<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('trangchu',function(){
	return view('pages.Trangchu');
});

Route::get('danhsach_sanpham_gird',function(){
	return view('pages.danhsach_sanpham_gird');
});


Route::get('danhsach_sanpham_list',function(){
	return view('pages.danhsach_sanpham_list');
});


Route::get('all_danhsach_list',function(){
	return view('pages.all_danhsach_list');
});

Route::get('all_danhsach_gird',function(){
	return view('pages.all_danhsach_gird');
});


Route::get('chitiet_sanpham',function(){
	return view('pages.chitiet_sanpham');
});


Route::get('dangnhap',function(){
	return view('pages.dangnhap');
});

Route::get('dangky',function(){
	return view('pages.dangky');
});

Route::get('quanlytaikhoan',function(){
	return view('pages.quanlytaikhoan');
});


Route::get('footer',function(){
	return view('layouts.footer');
});

Route::get('navbar',function(){
	return view('layouts.navbar');
});

Route::get('header',function(){
	return view('layouts.header');
});

Route::get('dangtin',function(){
	return view('pages.dangtin');
});