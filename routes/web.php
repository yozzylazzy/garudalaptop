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

Route::get('login', 'AuthController@index')->name('login');
Route::post('proses_login', 'AuthController@proses_login')->name('proses_login');
Route::get('logout', 'AuthController@logout')->name('logout');
//Route::get('admin', 'AuthController@admin'); 

Route::get('/admin/{locale?}', 'AdminController@getAdminAll')->name('admin')->middleware('auth');
Route::get('adminsearch', 'AdminController@search')
    ->name('cariadmin')->middleware('auth');
Route::get('/createadmin/{locale?}', 'AdminController@createadmin')->middleware('auth');
Route::post('/saveadmin', 'AdminController@saveadmin')->middleware('auth');
Route::post('/deladmin/{id}', 'AdminController@deladmin')
    ->name('hapusadmin')->middleware('auth');
Route::get('/editadmin/{id}/{locale?}', 'AdminController@editadmin')
    ->name('ubahadmin')->middleware('auth');
Route::post('/updateadmin/{id}/{locale?}', 'AdminController@updateadmin')
    ->name('modifadmin')->middleware('auth');

// Route::get('/pembeli', 'PembeliController@getPembeliAll')->name('pembeli')->middleware('auth');
Route::get('/pembeli/{locale?}', 'PembeliController@getPembeliAll')->middleware('auth');
Route::get('pembelisearch', 'PembeliController@search')
    ->name('caripembeli')->middleware('auth');
Route::get('/createpembeli/{locale?}', 'PembeliController@createpembeli')->middleware('auth');
Route::post('/savepembeli', 'PembeliController@savepembeli')->middleware('auth');
Route::post('/delpembeli/{id}', 'PembeliController@delpembeli')
    ->name('hapuspembeli')->middleware('auth');
Route::get('/editpembeli/{id}/{locale?}', 'PembeliController@editpembeli')
    ->name('ubahpembeli')->middleware('auth');
Route::post('/updatepembeli/{id}/{locale?}', 'PembeliController@updatepembeli')
    ->name('modifpembeli')->middleware('auth');

// Route::get('/laptop', 'LaptopController@getLaptopAll')->middleware('auth');
Route::get('/laptop/{locale?}', 'LaptopController@getLaptopAll')->middleware('auth');
Route::get('laptopsearch', 'LaptopController@search')
    ->name('carilaptop')->middleware('auth');
Route::get('/createlaptop/{locale?}', 'LaptopController@createlaptop')->middleware('auth');
Route::post('/savelaptop', 'LaptopController@savelaptop')->middleware('auth');
Route::post('/dellaptop/{id}', 'LaptopController@dellaptop')
    ->name('hapuslaptop')->middleware('auth');
Route::get('/editlaptop/{id}/{locale?}', 'LaptopController@editlaptop')
    ->name('ubahlaptop')->middleware('auth');
Route::post('/updatelaptop/{id}/{locale?}', 'LaptopController@updatelaptop')
    ->name('modiflaptop')->middleware('auth');

// Route::get('/penjualan', 'PenjualanController@getPenjualanAll')->middleware('auth');
Route::get('/penjualan/{locale?}', 'PenjualanController@getPenjualanAll')->middleware('auth');
Route::get('penjualansearch', 'PenjualanController@search')
    ->name('caritransaksi')->middleware('auth');
Route::get('/createpenjualan/{locale?}', 'PenjualanController@createpenjualan')->middleware('auth');
Route::post('/savepenjualan', 'PenjualanController@savepenjualan')->middleware('auth');
Route::post('/delpenjualan/{id}', 'PenjualanController@delpenjualan')
    ->name('hapuspenjualan')->middleware('auth');
Route::get('/editpenjualan/{id}/{locale?}', 'PenjualanController@editpenjualan')
    ->name('ubahpenjualan')->middleware('auth');
Route::post('/updatepenjualan/{id}/{locale?}', 'PenjualanController@updatepenjualan')
    ->name('modifpenjualan')->middleware('auth');


Route::get('/penjualan/detailpenjualan/{id}', 'DetailPenjualanController@getDetailPenjualanAll')
    ->name('detailpenjualan')->middleware('auth');
// Route::get('/penjualan/{locale?}', 'PenjualanController@getPenjualanAll');
// Route::get('/search', 'PenjualanController@search');
// Route::get('/createpenjualan/{locale?}', 'PenjualanController@createpenjualan');
// Route::post('/savepenjualan', 'PenjualanController@savepenjualan');
// Route::post('/delpenjualan/{id}', 'PenjualanController@delpenjualan')
//     ->name('hapuspenjualan');
// Route::get('/editpenjualan/{id}', 'PenjualanController@editpenjualan')
//     ->name('ubahpenjualan');
// Route::post('/updatepenjualan/{id}', 'PenjualanController@updatepenjualan')
//     ->name('modifpenjualan');

Route::fallback(function () {
    return view('404');
});