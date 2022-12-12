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

Route::get('/', function () {
    return view('login');
});

Route::get('/admin/{locale?}', 'AdminController@getAdminAll');
Route::get('adminsearch', 'AdminController@search')
    ->name('cariadmin');
Route::get('/createadmin/{locale?}', 'AdminController@createadmin');
Route::post('/saveadmin', 'AdminController@saveadmin');
Route::post('/deladmin/{id}', 'AdminController@deladmin')
    ->name('hapusadmin');
Route::get('/editadmin/{id}/{locale?}', 'AdminController@editadmin')
    ->name('ubahadmin');
Route::post('/updateadmin/{id}/{locale?}', 'AdminController@updateadmin')
    ->name('modifadmin');

Route::get('/pembeli', 'PembeliController@getPembeliAll')->name('pembeli');
Route::get('/pembeli/{locale?}', 'PembeliController@getPembeliAll');
Route::get('pembelisearch', 'PembeliController@search')
    ->name('caripembeli');
Route::get('/createpembeli/{locale?}', 'PembeliController@createpembeli');
Route::post('/savepembeli', 'PembeliController@savepembeli');
Route::post('/delpembeli/{id}', 'PembeliController@delpembeli')
    ->name('hapuspembeli');
Route::get('/editpembeli/{id}/{locale?}', 'PembeliController@editpembeli')
    ->name('ubahpembeli');
Route::post('/updatepembeli/{id}/{locale?}', 'PembeliController@updatepembeli')
    ->name('modifpembeli');

Route::get('/laptop', 'LaptopController@getLaptopAll');
Route::get('/laptop/{locale?}', 'LaptopController@getLaptopAll');
Route::get('laptopsearch', 'LaptopController@search')
    ->name('carilaptop');
Route::get('/createlaptop/{locale?}', 'LaptopController@createlaptop');
Route::post('/savelaptop', 'LaptopController@savelaptop');
Route::post('/dellaptop/{id}', 'LaptopController@dellaptop')
    ->name('hapuslaptop');
Route::get('/editlaptop/{id}/{locale?}', 'LaptopController@editlaptop')
    ->name('ubahlaptop');
Route::post('/updatelaptop/{id}/{locale?}', 'LaptopController@updatelaptop')
    ->name('modiflaptop');

Route::get('/penjualan', 'PenjualanController@getPenjualanAll');
Route::get('/penjualan/{locale?}', 'PenjualanController@getPenjualanAll');
Route::get('penjualansearch', 'PenjualanController@search')
    ->name('caritransaksi');
Route::get('/createpenjualan/{locale?}', 'PenjualanController@createpenjualan');
Route::post('/savepenjualan', 'PenjualanController@savepenjualan');
Route::post('/delpenjualan/{id}', 'PenjualanController@delpenjualan')
    ->name('hapuspenjualan');
Route::get('/editpenjualan/{id}/{locale?}', 'PenjualanController@editpenjualan')
    ->name('ubahpenjualan');
Route::post('/updatepenjualan/{id}/{locale?}', 'PenjualanController@updatepenjualan')
    ->name('modifpenjualan');


Route::get('/penjualan/detailpenjualan/{id}', 'DetailPenjualanController@getDetailPenjualanAll')
    ->name('detailpenjualan');
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