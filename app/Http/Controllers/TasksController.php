<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function getItem1(){
        return view('pages.tasks.index');
    }

    public function getItemPsychologicznoPedagogiczne(){
        return view('pages.tasks.psychologiczno_pedagogiczne');
    }
}
