<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HelpController extends Controller
{
    public function index(){
        return view('pages.help.index');
    }
    //
    public function ambasadorzy(){
        return view('pages.help.ambasadorzy');
    }
    //
    public function darczyncy(){
        return view('pages.help.darczyncy');
    }
    //
    public function nowozency(){
        return view('pages.help.nowozency');
    }
    //
    public function allegro(){
        return view('pages.help.allegro');
    }
    //
    public function oszczedzanie(){
        return view('pages.help.oszczedzanie');
    }
    //
    public function siepomaga(){
        return view('pages.help.siepomaga');
    }
    //
    public function zrzutka(){
        return view('pages.help.zrzutka');
    }
    //
    public function wspolpraca(){
        return view('pages.help.wspolpraca');
    }
    //
    public function podatek(){
        return view('pages.help.podatek');
    }
    //
    public function downloadPit(){
        $file = '../storage/app/download/pity2019.exe';
        $name = basename($file);
        return response()->download($file, $name);
    }
}
