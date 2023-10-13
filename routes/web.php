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

Route::get('/', 'DisplayController@index')->name('customer.view.index'); 
Route::get('/about', 'DisplayController@about')->name('customer.view.about'); 
Route::get('/automotive-sensor', 'DisplayController@automotive')->name('customer.view.automotive'); 
Route::get('/charging-solution', 'DisplayController@charging')->name('customer.view.charging'); 
Route::get('/motor-controllers', 'DisplayController@motor')->name('customer.view.motor'); 
Route::get('/battery-management', 'DisplayController@battery')->name('customer.view.battery'); 
Route::get('/contact', 'DisplayController@contact')->name('customer.view.contact'); 