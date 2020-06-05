<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index(){
        return view('pages.about.index');
    }
    //
    public function zarzad(){
        return view('pages.about.zarzad');
    }
    //
    public function rodo(){
        return view('pages.about.rodo');
    }
    public function certIndex(){
        return view('pages.about.cert.index');
    }
    public function certParter(){
        return view('pages.about.cert.parter');
    }
    public function certFirstFloor(){
        return view('pages.about.cert.pierwsze');
    }
    public function certSecondFloor(){
        return view('pages.about.cert.drugie');
    }
    //
}
