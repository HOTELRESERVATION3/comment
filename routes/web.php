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

Route::get('hotellist','hotellist@index');
Route::get('registration','registration@index');
Route::get('login','login@index');
Route::get('logout','logout@index');
Route::get('comment','comment@index');
Route::get('commentredisanblue','commentredisanblue@index');
Route::get('showcomment','showcomments@index');
Route::get('bookingmessage','bookingmessage@index');
Route::get('booking','bookingcontroller@index');
Route::get('contact','contact@index');
Route::get('feedback','feedback@index');
Route::post('store','registration@store');
Route::post('store1','login@store1');
Route::post('store2','comment@store2');
Route::post('store3','bookingcontroller@store3');
Route::post('user_logout','logout@user_logout');
Route::get('namelist','namelist@namelist');
Route::get('coxsbazar','hotelview@coxsbazar');
Route::get('aboutus','others@aboutus');
Route::get('offers','others@offers');
Route::get('hotelagrabad','hotelview@hotelagrabad');
