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
	$user =\Auth::user();
	if(!$user){
		return redirect('login');
	}else{
		return redirect('pricing');
	}
});




Route::prefix('/pricing')->middleware(['auth'])->group(function(){
	Route::get('/', 'Admin\packageController@pricing');
});


Route::prefix('/admin')->namespace('Admin')->middleware(['auth','admin'])->group(function(){
	Route::get('/', function(){
		return redirect('/admin/clients');
	});

	Route::get('/deleteClient/{id}','clientController@deleteClient')->name('deleteClient');
	Route::get('/clients/DT','clientController@clientDT')->name('clientDT');

	Route::resource('/clients','clientController');

	Route::get('/deletePackage/{id}','packageController@deletePackage')->name('deletePackage');
	Route::get('/packages/DT','packageController@packageDT')->name('packageDT');	
	Route::resource('/packages','packageController');


});


Auth::routes();
Route::get('/register',function(){
	return redirect('login');
});

Route::get('/logout',function(){
	\Auth::logout();
    return redirect('/login');        
});
