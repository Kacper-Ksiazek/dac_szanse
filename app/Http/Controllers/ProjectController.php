<?php

namespace App\Http\Controllers;

use App\Project;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    //THIS IS ONLY API METHOD
    //
    public function archives() {
        $archives=[];
        foreach(Project::all() as $item){
            $date=Carbon::create($item->till)->year;
            if(!in_array($date,$archives)) array_push($archives,$date);
        }
        //
        asort($archives);
        $result=[];

        //We want to have items in array in correct order, cuz in a future
        //JS and json parsing can make us a lot of mistakes, so we're trying 
        //to avoid it right now and right here via creating now array.
        foreach($archives as $item) array_push($result,$item);
        
        //
        return $result;
    }
    //
    //
    //
    public function showSingleProject(Project $project){
        $id=Project::all()->search(function($item) use($project){
            return $item->id===$project->id;
        });
        //
        $previous=$id===Project::all()->count()-1?false:Project::where('id',$id+2)->first()->title;
        $next=$id===0?false:Project::where('id',$id)->first()->title;
        //
        return view('pages.activities.projects.single_project',[
            'project' => $project,
            'previous' => $previous,
            'next' => $next
        ]);
        dd($previous,$project->title,$next);
        dd(Project::all()[$id]->title);
    }
    //
    //THIS HANDLE SINGLE ARCHIVE VIEW
    //
    public function handleArchives($year){
        $result=[];
        //
        foreach(Project::all() as $project){
            if(Carbon::create($project->till)->year==$year) array_push($result,$project);
        }
        //
        return view('pages.activities.projects.single_archive',[
            'projects'=>$result,
            'year'=>$year
        ]);

    }
    //
    //
    //
    public function addNewForm(){
        $this->middleware('auth');
        return view('pages.activities.projects.add_new');
    }
    //
    //
    //
    public function createNewProject(){
        $file=request()->validate(['logo'=>'required|image'])['logo'];
        //
        $validatedData = request()->validate([
            'title'=> 'required',
            'content'=> 'required|min:10',
            'since'=> 'required',
            'till'=> 'required',
        ]);
        $validatedData['author_id']=auth()->id();
        //
        $title=$validatedData['title'];
        $file->store("projects/{$title}",'public');
        $validatedData['image'] = $file->hashName();
        Project::create($validatedData);
        //
        // $file->store('public',)
    }
}
