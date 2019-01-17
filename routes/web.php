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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('home', function(){
  return view('admin.dashboard');
});

/*Route::get('/client', 'ClientController@index')->name('client');
Route::get('/client', 'ClientController@create')->name('client_create');*/
Route::resource('client','ClientController');
Route::get('showTable','ClientController@showTable')->name('client.showTable');
/*Route::get('client/showT',function(){
  return DataTables::eloquent(Client::query())->make(true);
});*/

Route::resource('data_contact','DataContactController');
