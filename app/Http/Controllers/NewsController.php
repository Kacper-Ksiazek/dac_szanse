<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function addNewForm(){
        return view('pages.news.add_new');
    }
}
