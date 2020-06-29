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

Route::get('/home',function(){
    return redirect('/');
});

Route::get('/', function () {
    return view('welcome',[
        'news' => App\News::all()->reverse()->values()->take(4)

    ]);
});

Auth::routes(['register' => false]);

Route::get('/logout','Auth\LoginController@logout');
//Home


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
//ZAJECIA
Route::get('/dzialalnosc/zajecia','TasksController@getTasksIndex');
//ZAJECIA START
Route::get('/dzialalnosc/zajecia/psychologiczno-pedaogiczno-logopedyczne','TasksController@getItemPsychologicznoPedagogiczne');
Route::get('/dzialalnosc/zajecia/sala-doswiadczania-swiata','TasksController@getItemSalaDoswiadczaniaSwiatla');
Route::get('/dzialalnosc/zajecia/sala-ingegracji-sensorycznej','TasksController@getItemSalaIntegracjiSensorycznej');
Route::get('/dzialalnosc/zajecia/zajecia-rehabilitacyjne','TasksController@getItemRehabilitacyjne');
Route::get('/dzialalnosc/zajecia/hydroterapia','TasksController@getItemHydroterapia');
Route::get('/dzialalnosc/zajecia/hipoterapia','TasksController@getItemHipoterapia');
Route::get('/dzialalnosc/zajecia/dogoterapia','TasksController@getItemDogoterapia');
Route::get('/dzialalnosc/zajecia/muzykoterapia','TasksController@getItemMuzykoterapia');
Route::get('/dzialalnosc/zajecia/biofeedback','TasksController@getItemBiofeedback');
Route::get('/dzialalnosc/zajecia/arteterapia','TasksController@getItemArteterapia');
//ZAJECIA STOP
//
//PROJEKTY
//Wszystkie projekty
Route::get('/dzialalnosc/projekty','ProjectController@index');
//Pojedynczy projekt
Route::get('/dzialalnosc/projekty/{project}','ProjectController@showSingleProject');
//Archiwum konkretny rok bazujacy na dacie zakonczenia projektu
Route::get('/dzialalnosc/projekty/archiwum/{year}','ProjectController@handleArchives');
//
//JAK POMOC
//
//INDEX
Route::get('/jak-pomoc','HelpController@index');
Route::get('/jak-pomoc/ambasadorzy','HelpController@ambasadorzy');
Route::get('/jak-pomoc/darczyncy','HelpController@darczyncy');
Route::get('/jak-pomoc/wspolpraca','HelpController@wspolpraca');
Route::get('/jak-pomoc/nowozency','HelpController@nowozency');
Route::get('/jak-pomoc/allegro-charytatywni','HelpController@allegro');
Route::get('/jak-pomoc/pomoz-nam-zaoszczedzic','HelpController@oszczedzanie');
Route::get('/jak-pomoc/siepomaga','HelpController@siepomaga');
Route::get('/jak-pomoc/zrzutka','HelpController@zrzutka');
Route::get('/jak-pomoc/podatek','HelpController@podatek');
//
Route::get('/files/download-pit','HelpController@downloadPit');
//
//AKTUALNOSCI
//
//Wszystkie aktualnosci
Route::get('/aktualnosci','NewsController@index');
//Jedna aktualność
Route::get('/aktualnosci/{news}','NewsController@singleNews');
//
//ADMIN
//
//Projekty
//Wyswietlanie formularzu dodajacego nowy projekt
Route::get('/admin/dodaj-projekt','ProjectController@addNewForm')->middleware('auth');
//Dodawanie nowego projektu
Route::post('/admin/dodaj-projekt','ProjectController@createNewProject')->middleware('auth');
//
//Aktualnosci
//Wyswietlanie formularza dodajacego nowa aktualnosc
Route::get('/admin/dodaj-aktualnosc','NewsController@viewAddNewForm')->middleware('auth');
//Dodawanie nowej aktualności
Route::post('/admin/dodaj-aktualnosc','NewsController@addNewNews')->middleware('auth');
//
//
//
//O NAS
//index
Route::get('/o-nas','AboutUsController@index');
//ZARZAD
Route::get('/o-nas/zarzad','AboutUsController@zarzad');
//RODO
Route::get('/o-nas/polityka-rodo','AboutUsController@rodo');
//CERT index
Route::get('/o-nas/cert','AboutUsController@certIndex');
//CERT-parter
Route::get('/o-nas/budowa-cert/parter','AboutUsController@certParter');
//CERT- pietro 1
Route::get('/o-nas/budowa-cert/pietro-pierwsze','AboutUsController@certFirstFloor');
//CERT- pietro 2
Route::get('/o-nas/budowa-cert/pietro-drugie','AboutUsController@certSecondFloor');
//
Route::get('/o-nas/nagrody-i-wyroznienia','AboutUsController@nagrody');
//
Route::get('/o-nas/historia','AboutUsController@historia');
//
//
//
//KONTAKT
Route::get('/kontakt','ContactController@index');
Route::post('/kontakt/wyslij-wiadomosc-email','ContactController@sendEmail');