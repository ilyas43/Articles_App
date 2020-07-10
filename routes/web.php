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

Route::get('products','productController@index')/*->middleware('auth')*/;
Route::get('products/create','productController@create');
Route::post('products','productController@store');
Route::get('products/{product}','productController@show');
Route::get('products/{product}/edit','productController@edit');
Route::patch('products/{product}','productController@update');//patch pour le changement des donnes voir formulair dans edit
Route::delete('products/{product}','productController@destroy');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
