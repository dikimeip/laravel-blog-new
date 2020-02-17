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


Route::get('/admin','LoginController@index');
Route::get('/wp-admin/logout','AdminController@logout')->name('logout');

// user
Route::get('/','UserController@index')->name('user.index');



// admin
Route::post('/admin','LoginController@do_Login')->name('login');
Route::get('/wp-admin/index','AdminController@index')->name('AdminPage');
Route::get('/wp-admin/artikel','ArtikelController@index')->name('artikelPage');
Route::get('/wp-admin/artikel/detail/{id}','ArtikelController@detail')->name('artikelDetail');
Route::get('/wp-admin/artikel/update/{id}','ArtikelController@update')->name('artikelUpdate');
Route::get('/wp-admin/artikel/destroy/{id}','ArtikelController@destroy')->name('artikelDestroy');
Route::post('/wp-admin/artikel/store/{id}','ArtikelController@changeArtikel')->name('artikelRubah');
Route::post('/wp-admin/artikel/cari','ArtikelController@cari')->name('artikelCari');
Route::get('/wp-admin/artikel/add','ArtikelController@add')->name('addArtikel');
Route::post('/wp-admin/artikel/add','ArtikelController@store')->name('addArtikel');
Route::get('/wp-admin/kategori','KategoriController@index')->name('kategoriPage');
Route::post('/wp-admin/kategori/add','KategoriController@add')->name('addKategori');
Route::get('/wp-admin/kategori/delete/{id}','KategoriController@remove')->name('removeKategori');



