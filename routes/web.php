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

Route::get('login', function () {
    return view('login');
})->name('login');
// Route::get('login','diemdanhController@login')->name('login');
Route::post('login','diemdanhController@login')->name('login');
Route::post('luu','diemdanhController@luu')->name('luu');

Route::get('diemdanh','diemdanhController@diemdanh')->name('diemdanh');
Route::get('danhsach','diemdanhController@danhsach')->name('danhsach');
Route::get('ketthuc','diemdanhController@ketthuc')->name('ketthuc');
Route::post('save_ketthuc','diemdanhController@save_ketthuc')->name('save_ketthuc');
Route::post('thongbao','diemdanhController@thongbao')->name('thongbao');
Route::get('taglink/pagination','diemdanhController@pagination');
Route::get('/taglink','diemdanhController@danhsach');