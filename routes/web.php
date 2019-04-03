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

  Route::get('/kategori/tambah','kategoriController@tambah');
Route::post('/kategori/abcd','kategoriController@abcd');
Route::get('/kategori/editt/{id}','kategoriController@editt');
Route::post('/kategori/updatee','kategoriController@updatee');
Route::get('/kategori/hapuss/{id}','kategoriController@hapuss');
    
  

  Route::resource('kategori','kategoriController');
  