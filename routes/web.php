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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items', 'ItemController@list');
Route::get('/item/create', 'ItemController@create');
Route::post('/item/insert', 'ItemController@insert');
Route::get('/item/edit/{id}', 'ItemController@edit');
Route::post('/item/update/{id}', 'ItemController@update');
Route::delete('/item/delete/{id}', 'ItemController@delete');
