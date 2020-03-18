<?php

namespace Tests\Feature;

use App\Project;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    /** @test */
    public function project_list_is_providing_upon_page_loading(){
        create('App\Project',[],10);
        $this->get('/dzialalnosc/projekty')->assertViewHasAll(['projects','archives']);
    }

    /** @test */
    public function add_new_project(){
        $this->singIn();
        $data = make('App\Project')->toArray();
        $data['logo'] = UploadedFile::fake()->image('logo.jpg');
        //
        $this->post('/admin/dodaj-projekt',$data);
        $this->assertEquals(1,Project::all()->count());
        $project=Project::first();
        //
        $fileExistsInStorage= function () use($project){
            return Storage::disk('public')->exists("/projects/{$project->title}/{$project->image}");
        };
        //
        $this->assertTrue($fileExistsInStorage());
        if($fileExistsInStorage()) Storage::disk('public')->deleteDirectory("projects/{$project->title}");
        $this->assertFalse($fileExistsInStorage());
        
    }
}
