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

Route::get('kategori',function(){
    return "halaman kategori";
  
  } );

  Route::get('layout', function(){
    return view('Layout.master');
  }

);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('table', function(){
    return view('kategori.index');
  });

  Route::get('table', function(){
    return view('produk.index');
  });

  Route::get('table', function(){
    return view('transaksi.index');
  });

  Route::get('/kategori/tambah','kategoriController@tambah');
Route::post('/kategori/abcd','kategoriController@abcd');
Route::get('/kategori/editt/{id}','kategoriController@editt');
Route::post('/kategori/updatee','kategoriController@updatee');
Route::get('/kategori/hapuss/{id}','kategoriController@hapuss');

Route::get('/produk/tambah2','produkController@tambah2');
Route::post('/produk/abcd2','produkController@abcd2');
Route::get('/produk/editt2/{id}','produkController@editt2');
Route::post('/produk/updatee2','produkController@updatee2');
Route::get('/produk/hapuss2/{id}','produkController@hapuss2');

Route::get('/transaksi/tambah3','transaksiController@tambah3');
Route::post('/transaksi/abcd3','transaksiController@abcd3');
Route::get('/transaksi/editt3/{id}','transaksiController@editt3');
Route::post('/transaksi/updatee3','transaksiController@updatee3');
Route::get('/transaksi/hapuss3/{id}','transaksiController@hapuss3');
    
  

  Route::resource('kategori','kategoriController');
  Route::resource('produk','produkController');
  Route::resource('transaksi','transaksiController');