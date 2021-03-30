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
    return view('home');
});

Route::get('/createad', function () {
    return view('create');
});

Route::post('/createad', 'CustomersController@store');
Route::get('/show', 'CustomersController@show');
Route::delete('/delete/{id}','CustomersController@destroy');


