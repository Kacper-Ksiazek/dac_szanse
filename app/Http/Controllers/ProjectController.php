<?php

namespace App\Http\Controllers;

use App\Project;
use Carbon\Carbon;
use Exception;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    //
    public function index(){
        return view('pages.activities.projects.index',[
            'archives'=>$this->archives(),
            'projects'=>Project::orderBy('created_at','desc')->paginate(3)
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
        //
        foreach($archives as $item) array_push($result,$item);
        
        //
        return $result;
    }
    //
    //
    //
    public function showSingleProject(Project $project){
        $id=false;
        foreach(Project::all() as $key=>$item){
            if($project->id===$item->id){
                $id= $key;
            }
        }
        //
        $previous=$id===0?false:Project::all()[$id-1]->title;
        $next=$id===Project::count()-1?false:Project::all()[$id+1]->title;
        //
        return view('pages.activities.projects.single_project',[
            'project' => $project,
            'previous' => $previous,
            'next' => $next
        ]);
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
        //Set new project ID sooner
        if(app()->environment()==="testing") $id=Project::all()->count()+1;
        else if(app()->environment()==='local') $id=DB::select("SHOW TABLE STATUS LIKE 'projects'")[0]->Auto_increment;
        $root="project_{$id}";
        $validatedData['directory']=$root;
        //
        $file->store("projects/{$root}",'public');
        $validatedData['image'] = $file->hashName();
        Project::create($validatedData);
        //
        // $file->store('public',)
    }
}
