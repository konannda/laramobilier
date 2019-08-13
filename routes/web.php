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
/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/annonce/annonce', function(){
	return view('/annonce/annonce');
});*/
Route::get('/annonce/ajout', function () {
    return view('/annonce/ajout');
});
Route::view('/','/annonce/annonce');
Route::post('/annonce/ajout', 'AnnoncesController@ajout');
Route::get('/', 'AnnoncesController@list');
Route::get('/annonce/single/{slug}', 'AnnoncesController@detail');
Route::get('/annonce/admin', 'AnnoncesController@listAdmin');
Route::get('/delete/{slug}', 'AnnoncesController@suprim');
Route::match(['get','post'], 'annonce/update/{slug}', 'AnnoncesController@modif');