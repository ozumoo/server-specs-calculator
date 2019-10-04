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


Route::prefix('/admin')->namespace('Admin')->middleware(['auth','admin'])->group(function(){
	Route::get('/deleteClient/{id}','clientController@deleteClient')->name('deleteClient');
	Route::get('/clients/DT','clientController@clientDT')->name('clientDT');

	Route::resource('/clients','clientController');

	Route::get('/deletePackage/{id}','specsPriceController@deletePackage')->name('deletePackage');
	Route::get('/packages/DT','specsPriceController@packageDT')->name('packageDT');	
	Route::resource('/packages','specsPriceController');


	// Route::get('/clients','clientController@index')->name('clients');
	// Route::get('/clients/DT','clientController@clientDT')->name('clientDT');
	// Route::get('/clients/create','clientController@create');
	// Route::get('/clients/{id}','clientController@show');
	// Route::get('/clients/{id}/edit','clientController@edit');
	// Route::patch('/clients/{id}','clientController@update');
	// Route::post('/clients/{id}','clientController@store');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
