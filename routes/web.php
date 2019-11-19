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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/report', 'ReportController@index')->name('report');
Route::post('/search', 'ReportController@search')->name('search');

Route::resource('category', 'CategoryController');
Route::resource('item', 'ItemController');
Route::resource('staff', 'StaffController');


Route::resource('sale', 'SaleController');
Route::resource('order', 'OrderController');

