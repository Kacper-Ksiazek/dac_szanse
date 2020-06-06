<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index(){
        return redirect('/');
    }
    //
    public function zarzad(){
        return view('pages.about.zarzad');
    }
    //
    public function nagrody(){
        return view('pages.about.nagrody');
    }
    //
    public function historia(){
        return view('pages.about.historia');
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
