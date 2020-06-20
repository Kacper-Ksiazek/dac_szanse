<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index(){
        return view('pages.contact');
    }
    //
    public function sendEmail(){
        //TODO
        $data=request()->validate([
            'content'=>'required',
            'name'=>'required',
            'email'=>'required'
        ]);
        Mail::send('emails.contact-us',$data,function($m){
            $m->to('jodax95@gmail.com')->subject('Nowa wiadomość z Dać Szansę!');
        });
        
    }
}
