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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin','LoginController@index');
Route::post('/admin','LoginController@do_Login')->name('login');
Route::get('/wp-admin/index','AdminController@index')->name('AdminPage');
Route::get('/wp-admin/artikel','ArtikelController@index')->name('artikelPage');
Route::get('/wp-admin/kategori','KategoriController@index')->name('kategoriPage');


