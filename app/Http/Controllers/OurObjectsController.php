<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurObjectsController extends Controller
{
    //
    public function index(){
        return view('pages.our_objects.index');
    }
    //
    //Niepubliczny Ośrodek Rewalidacyjno-Wychowawczy
    //
    public function getItem1(){
        return view('pages.our_objects.rewalidacyjno-wychowawczy');
    }
    //
    //Świetlica Terapeutyczno-Integracyjna "Szansa
    //
    public function getItem2(){
        return view('pages.our_objects.swietlica');
    }
}
