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



//
//TASKS
//
//DZIALALNOSC
Route::get('/dzialalnosc','TasksController@index');
//ZAJECIA
Route::get('/dzialalnosc/zajecia','TasksController@getTasksIndex');
//ZAJECIA START
Route::get('/dzialalnosc/zajecia/psychologiczno-pedaogiczno-logopedyczne','TasksController@getItemPsychologicznoPedagogiczne');
//
Route::get('/dzialalnosc/zajecia/sala-doswiadczania-swiatla','TasksController@getItemSalaDoswiadczaniaSwiatla');
//
Route::get('/dzialalnosc/zajecia/sala-ingegracji-sensorycznej','TasksController@getItemSalaIntegracjiSensorycznej');
//
Route::get('/dzialalnosc/zajecia/zajecia-rehabilitacyjne','TasksController@getItemRehabilitacyjne');
//
Route::get('/dzialalnosc/zajecia/hydroterapia','TasksController@getItemHydroterapia');
//
Route::get('/dzialalnosc/zajecia/hipoterapia','TasksController@getItemHipoterapia');
//
Route::get('/dzialalnosc/zajecia/dogoterapia','TasksController@getItemDogoterapia');
//
Route::get('/dzialalnosc/zajecia/muzykoterapia','TasksController@getItemMuzykoterapia');
//
Route::get('/dzialalnosc/zajecia/biofeedback','TasksController@getItemBiofeedback');
//
Route::get('/dzialalnosc/zajecia/arteterapia','TasksController@getItemArteterapia');
//ZAJECIA STOP
