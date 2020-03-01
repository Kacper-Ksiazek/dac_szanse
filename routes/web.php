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
    return view('welcome');
});

Auth::routes();
//Home
Route::get('/home', 'HomeController@index')->name('home');
//
//OUR OBJECTS
//
//index
Route::get('/nasze-placowki','OurObjectsController@index');
//Niepubliczny Ośrodek Rewalidacyjno-Wychowawczy
Route::get('/nasze-placowki/niepubliczny-osrodek-rewalidacyjno-wychowawczy','OurObjectsController@getItem1');
//Świetlica Terapeutyczno-Integracyjna "Szansa
Route::get('/nasze-placowki/swietlica-terapeutyczno-integracyjna-szansa','OurObjectsController@getItem2');
