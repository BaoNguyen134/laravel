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

Route::get('/ThemSanPham',function(){
        $sanpham = new App\SanPham();
        $sanpham->TenSP = 'Sản Phẩm 1';
        $sanpham->HinhSP = 'abcdefgh';
        $sanpham->Gia = 1000;
        $sanpham->save();
        echo "Đã Thêm Sản Phẩm";
});

Route::resource('SanPham','ControllerSanPham');
