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

//Login
// Route::get('user/login', 'AdminController@getLogin')->name('user.login');
// Route::post('user/login', 'AdminController@postLogin');

// Route::get('/', function () {
//     return view('layout/home');
// });

// Route::get('/home', function () {
//     return view('layout/home');
// });

Route::get('/faq', function () {
	return view('faq');
});

// Route::get('/','otentikasi\OtentikasiController@login')->name('login');

//PENGAWASAN
Route::get('pengawasan/add','PengawasanController@add');
Route::post('pengawasan/store','PengawasanController@store');
Route::get('pengawasan/data','PengawasanController@index');
Route::get('pengawasan/edit/{id_pengawasan}','PengawasanController@edit');
Route::patch('pengawasan/{id_pengawasan}','PengawasanController@editProsess');
Route::delete('pengawasan/{id_pengawasan}','PengawasanController@delete');
Route::get('pengawasan/cetak_pengawasan/{id_pengawasan}','PengawasanController@cetakPengawasan');
Route::get('/exportpengawasan','PengawasanController@pengawasanexport')->name('exportpengawasan');

//MONITORING
Route::get('monitoring/add','MonitoringController@add');
Route::post('monitoring/store','MonitoringController@store');
Route::get('monitoring/data','MonitoringController@index');
Route::get('monitoring/edit/{id_monitoring}','MonitoringController@edit');
Route::patch('monitoring/{id_monitoring}','MonitoringController@editProsess');
Route::delete('monitoring/{id_monitoring}','MonitoringController@delete');
Route::get('monitoring/cetak_monitoring/{id_monitoring}','MonitoringController@cetakMonitoring');
Route::get('/exportmonitoring','MonitoringController@monitoringexport')->name('exportmonitoring');

//PENCEGAHAN
Route::get('pencegahan/add','PencegahanController@add');
Route::post('pencegahan/store','PencegahanController@store');
Route::get('pencegahan/data','PencegahanController@index');
Route::get('pencegahan/edit/{id_pencegahan}','PencegahanController@edit');
Route::patch('pencegahan/{id_pencegahan}','PencegahanController@editProsess');
Route::delete('pencegahan/{id_pencegahan}','PencegahanController@delete');
Route::get('pencegahan/cetak_pencegahan/{id_pencegahan}','PencegahanController@cetakPencegahan');
Route::get('/exportpencegahan','PencegahanController@pencegahanexport')->name('exportpencegahan');

//KEGIATAN
Route::get('kegiatan/add','KegiatanController@add');
Route::post('kegiatan/store','KegiatanController@store');
Route::get('kegiatan/data','KegiatanController@index');
Route::get('kegiatan/edit/{id_kegiatan}','KegiatanController@edit');
Route::patch('kegiatan/{id_kegiatan}','KegiatanController@editProsess');
Route::delete('kegiatan/{id_kegiatan}','KegiatanController@delete');
Route::get('kegiatan/kegiatanexport','KegiatanController@kegiatanexport');
Route::get('kegiatan/cetak_kegiatan/{id_kegiatan}','KegiatanController@cetakKegiatan');
Route::get('/exportkegiatan','KegiatanController@kegiatanexport')->name('exportkegiatan');


Route::namespace('Auth')->group(function () {
	Route::get('login', 'AuthController@login')->name('login');
	Route::get('register', 'AuthController@register')->name('register');
	Route::post('login-post','AuthController@formLogin')->name('login.post');
	Route::post('login-register','AuthController@formRegister')->name('register.post');
	Route::get('logout', 'AuthController@logout')->name('logout');
});

Route::get('/', 'DashboardController@dashboard')->name('dashboard');