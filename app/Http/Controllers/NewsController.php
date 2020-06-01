<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(){
        $news=[];
        foreach (News::all() as $item) {
            array_unshift($news,$item->toArray());
        }
        // 
        return view('pages.news.index',[
            'news'=>json_encode($news)
        ]);
    }
    //
    //
    //
    public function singleNews(News $news){
        $recommended=[];
        $i=0;
        while(count($recommended)!==2){
            if(($item=News::all()->reverse()->values()->get($i))!=$news) array_push($recommended,$item);
            $i++;
        }
        return view('pages.news.single_news',[
            'data'=>$news,
            'recommended'=>$recommended
            ]);
    }
    //
    //
    //
    public function viewAddNewForm(){
        $this->middleware('auth');
        return view('pages.news.add_new');
    }
    //
    //
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
        if(app()->environment()==="testing") $id=News::all()->count()+1;
        else if(app()->environment()==='local') $id=DB::select("SHOW TABLE STATUS LIKE 'news'")[0]->Auto_increment;
        
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
