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

// Users
Route::resource('user','UserController');
Route::get('showTableU','UserController@showTable')->name('user.showTable');

/*Route::get('/client', 'ClientController@index')->name('client');
Route::get('/client', 'ClientController@create')->name('client_create');*/
Route::resource('client','ClientController');
Route::get('showTableC','ClientController@showTable')->name('client.showTable');
/*Route::get('client/showT',function(){
  return DataTables::eloquent(Client::query())->make(true);
});*/

Route::resource('data_contact','DataContactController');

//Providers
Route::resource('provider','ProviderController');
Route::get('showTableP','ProviderController@showTableP')->name('provider.showTableP');

//Services
Route::resource('service','ServiceController');
Route::get('showTable','ServiceController@showTable')->name('service.showTable');

//Events
Route::resource('event','EventController');
Route::get('showTable','EventController@showTable')->name('event.showTable');

//Preapids
Route::resource('prepaid','PrepaidController');
Route::get('showTable','PrepaidController@showTable')->name('prepaid.showTable');
