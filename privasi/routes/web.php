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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','Logincontroller@index');
Route::post('/ceklogin','Logincontroller@ceklogin');
Route::get('/logout','Logincontroller@logout');
Route::post('/savejenisbrg','Mastercontroller@create');
Route::post('/saveuser','Usercontroller@create');
Route::post('/savepengiriman','Pengirimancontroller@create');
Route::post('/savebarangkiriman','Barangkirimancontroller@create');
Route::post('/saveitempengiriman','Pengirimancontroller@createitem');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard','Maincontroller@index');
    // jenis barang module
    Route::get('/listjenisbrg','Mastercontroller@listjenisbrg');
    Route::get('/addjenisbrg','Mastercontroller@addjenisbrg');
    Route::get('/editjenisbrg/{id}','Mastercontroller@editjenisbrg');
    Route::post('/updatejenisbrg/{id}','Mastercontroller@updatejenisbrg');
    Route::get('/deletejenisbrg/{id}','Mastercontroller@deletejenisbrg');
    // user module
    Route::get('/listuser','Usercontroller@listuser');
    Route::get('/adduser','Usercontroller@adduser');
    Route::get('/edituser/{id}','Usercontroller@edituser');
    Route::post('/updateuser/{id}','Usercontroller@updateuser');
    Route::get('/deleteuser/{id}','Usercontroller@deleteuser');
    // pengiriman module
    Route::get('/listpengiriman','Pengirimancontroller@listpengiriman');
    Route::get('/addpengiriman','Pengirimancontroller@addpengiriman');
    Route::get('/deletepengiriman/{id}','Pengirimancontroller@deletepengiriman');
    Route::get('/detailpengiriman/{id}','Pengirimancontroller@detailpengiriman');
    Route::get('/updatestatuspengiriman/{id}/{status}','Pengirimancontroller@updatestatuspengiriman');
    Route::get('/invoicepengiriman/{id}','Barangkirimancontroller@invoicepengiriman');
    // added 20200627 by asdam
    Route::get('/suratjalan/{id}','Pengirimancontroller@suratjalan');
    // report module
    Route::get('/reportkirim','Reportcontroller@reportkirim');
    Route::post('/pdfpengiriman','Reportcontroller@pdfpengiriman');
    // barangkiriman module
    Route::get('/listbarangkiriman','Barangkirimancontroller@listbarangkiriman');
    Route::get('/addbarangkiriman','Barangkirimancontroller@addbarangkiriman');
    Route::get('/deletebarangkiriman/{id}','Barangkirimancontroller@deletebarangkiriman');
    Route::get('/detailbarangkiriman/{id}','Barangkirimancontroller@detailbarangkiriman');
    Route::get('/updatestatusbarangkiriman/{id}/{status}','Barangkirimancontroller@updatestatusbarangkiriman');
});
