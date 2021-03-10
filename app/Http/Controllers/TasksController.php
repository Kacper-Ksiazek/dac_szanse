<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        return view('pages.activities.index');
    }
    //
    public function getTasksIndex(){
        return view('pages.activities.tasks.index');
    }
    //
    public function getItemPsychologicznoPedagogiczne(){
        return view('pages.activities.tasks.psychologiczno_pedagogiczne');
    }
    //
    public function getPrices(){
        return view('pages.activities.tasks.prices');
    }
    //
    public function getItemSalaDoswiadczaniaSwiatla(){
        return view('pages.activities.tasks.sala_doswiadczania_swiata');
    }
    //
    public function getItemSalaIntegracjiSensorycznej(){
        return view('pages.activities.tasks.sala_ingegracji_sensorycznej');
    }
    //
    public function getItemRehabilitacyjne(){
        return view('pages.activities.tasks.rehabilitacja');
    }
    //
    public function getItemHydroterapia(){
        return view('pages.activities.tasks.hydroterapia');
    }
    //
    public function getItemHipoterapia(){
        return view('pages.activities.tasks.hipoterapia');
    }
    //
    public function getItemDogoterapia(){
        return view('pages.activities.tasks.dogoterapia');
    }
    //
    public function getItemMuzykoterapia(){
        return view('pages.activities.tasks.muzykoterapia');
    }
    //
    public function getItemBiofeedback(){
        return view('pages.activities.tasks.biofeedback');
    }
    //
    public function getItemArteterapia(){
        return view('pages.activities.tasks.arteterapia');
    }
    
}
