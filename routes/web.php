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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// <<<<<<< HEAD
Route::get('/pemain/dashboard','DaftarakunController@dashboard');
Route::get('/pemain/daftarakun','DaftarakunController@index1');
Route::get('/pemain/daftarakun/add','DaftarakunController@index2');
Route::post('/pemain/daftarakun/create','DaftarakunController@create');
Route::get('/pemain/daftarakun/{id}/delete', 'DaftarakunController@destroy');
// =======
// >>>>>>> 1f58240116b1cadfabe37a240f30f0422fc523cf
// halaman awal
Route::get('/pemain','PemainController@index');
// halaman create
Route::post('/pemain/add', 'PemainController@create');
// // submit baru
Route::post('/pemain', 'TemansController@store');
// // klik detail pemain
Route::get('/pemain/{id}','PemainController@show');
// // klik tombol update
Route::post('/pemain/{id}/edit', 'PemainController@update');
// // klik tombol delete
Route::get('/pemain/{id}/delete', 'PemainController@destroy');
// // menampilkan tombol edit
Route::get('/pemain/{id}/edit', 'PemainController@edit');
Route::get('/home', 'HomeController@index')->name('home');
