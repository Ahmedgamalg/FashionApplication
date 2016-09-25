<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('addCatogry','CatogeryController@showAddCatogry');
Route::resource('catogrycontrol','CatogeryController@showCatogryControl');
Route::resource('catogry','CatogeryController');
Route::resource('catogry/restored/{id}/','CatogeryController@restored');
Route::resource('catogry/deleteforever/{id}/','CatogeryController@deleteforever');
Route::resource('prodect','ProdectController');

Route::auth();

Route::get('/home', 'HomeController@index');
