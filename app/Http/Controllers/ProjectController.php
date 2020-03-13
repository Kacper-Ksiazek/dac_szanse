<?php

namespace App\Http\Controllers;

use App\Project;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index(){
        return view('pages.activities.projects.index',[
            'archives'=>$this->archives(),
            'projects'=>Project::all()->toArray()
        ]);
    }
    //
    //
    //
    public function archives(){
        $archives=[];
        foreach(Project::all() as $item){
            $date=Carbon::create($item->end)->year;
            if(!in_array($date,$archives)) array_push($archives,$date);
        }
        asort($archives);
        $result=[];
        foreach($archives as $item) array_push($result,$item);
        return $result;
    }
    //
    //
    //
    public function showSingleProject(Project $project){
        dd($project);
    }
    //
    //
    //
    public function handleArchives($year){
        $result=[];
        foreach(Project::all() as $project){
            if(Carbon::create($project->end)->year==$year) array_push($result,$project);
        }
        dd($result);
        return $result;
    }
}
