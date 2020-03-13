<?php

namespace Tests\Feature;

use App\Project;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    /** @test */
    public function project_list_is_providing_upon_page_loading(){
        create('App\Project',[],10);
        $this->getJson('api/archives')->assertStatus(200);
    }
}
