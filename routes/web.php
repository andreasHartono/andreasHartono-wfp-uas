<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', "HomeController@home");
Route::post('/home/search', "HomeController@search");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('admin.info');
});

Route::get('/login/account', 'LoginController@Login');
Route::get('/logout/account', 'LoginController@logout');

Route::get('/testlogin', function () {
    return view('auth.login');
});

// Route::group(['middleware' => 'is_admin'], function () {
// });

Route::group(['middleware' => 'admin'], function () {
    //Report
    Route::get('/reportcustomer', 'ObatController@showData');
    Route::get('/reportNote', 'NotaController@index');
    Route::get('/repordetail/{id}', 'NotaDetailController@cari');

    //Obat
    Route::get('/obat', 'ObatController@dashboardAdmin')->name('obat.index');
    Route::post('/obat/add', 'ObatController@store');
    Route::delete('/obat/delete/{obat}', 'ObatController@destroy');

    //kategori
    Route::get('/kategori', 'KategoriObatController@index')->name('kategori.index');
    Route::post('/kategori/add', 'KategoriObatController@store');
    Route::post('/kategori/update/{kategoriObat}', 'KategoriObatController@edit');

    //Pembeli
    Route::get('/pembeli', 'UserController@data');
});
