<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function viewAddNewForm(){
        $this->middleware('auth');
        return view('pages.news.add_new');
    }
    //
    public function addNewNews(){
        $galleryFiles=[];
        foreach(request()->all() as $key=>$item){
            if(is_file($item) && $key!='logo') array_push($galleryFiles,$item);
        }
        $logo=request()->validate(['logo'=>'required|file'])['logo'];
        //
        $data=request()->validate([
            'title'=>'required|min:3',
            'date'=>'required',
            'content'=>'required',
        ]);
        //
        $data['author_id']=auth()->id();
        //
        $id=News::all()->count()+1;
        $root="news_{$id}";
        $data['directory']=$root;
        //
        $logo->store($newsPath="news/{$root}",'public');
        $data['logo']=$logo->hashName();
        $gallery=[];
        //
        if(count($galleryFiles)){
            foreach($galleryFiles as $item){
                $item->store($newsPath.'/gallery','public');
                array_push($gallery,$item->hashName());
            }
        }
        $data['gallery']=json_encode($gallery);
        //
        News::create($data);
    }
    //
    
}
