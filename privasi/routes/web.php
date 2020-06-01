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
});
