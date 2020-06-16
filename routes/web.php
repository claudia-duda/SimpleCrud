<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
    return view('home');
});
Route::get('clients','ClientController@index');
Route::get('clients/create','ClientController@create');
Route::get('clients/{id}','ClientController@show');
Route::post('clients/store', 'ClientController@store');
Route::get('clients/{id}/edit', 'ClientController@edit');
Route::put('clients/{id}', 'ClientController@update');
Route::delete('clients/{id}', 'ClientController@destroy');



Route::post('products/store', 'ProductController@store');
Route::get('products','ProductController@index');
Route::get('products/create','ProductController@create');
Route::get('products/{id}','ProductController@show');
Route::get('products/{id}/edit', 'ProductController@edit');
Route::put('products/{id}', 'ProductController@update');
Route::delete('products/{id}', 'ProductController@destroy');
