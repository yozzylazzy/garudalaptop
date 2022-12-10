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

Route::get('/admin', 'AdminController@getAdminAll');
Route::get('/admin/{locale?}', 'AdminController@getAdminAll');
Route::get('/search', 'AdminController@search');
Route::get('/createadmin/{locale?}', 'AdminController@createadmin');
Route::post('/saveadmin', 'AdminController@saveadmin');
Route::post('/deladmin/{id}', 'AdminController@deladmin')
    ->name('hapusadmin');
// Route form edit & update buku (UPDATE)
Route::get('/editadmin/{id}', 'AdminController@editadmin')
    ->name('ubahadmin');
Route::post('/updateadmin/{id}', 'AdminController@updateadmin')
    ->name('modifadmin');

Route::get('/pembeli', 'PembeliController@getPembeliAll');
Route::get('/pembeli/{locale?}', 'PembeliController@getPembeliAll');
Route::get('/search', 'PembeliController@search');
Route::get('/createpembeli/{locale?}', 'PembeliController@createpembeli');
Route::post('/savepembeli', 'PembeliController@savepembeli');
Route::post('/delpembeli/{id}', 'PembeliController@delpembeli')
    ->name('hapuspembeli');
// Route form edit & update buku (UPDATE)
Route::get('/editpembeli/{id}', 'PembeliController@editpembeli')
    ->name('ubahpembeli');
Route::post('/updatepembeli/{id}', 'PembeliController@updatepembeli')
    ->name('modifpembeli');
