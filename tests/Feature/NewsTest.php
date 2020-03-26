<?php

namespace Tests\Feature;

use App\News;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /** @test */
    public function common_user_can_not_view_add_new_news_panel(){
        $this->get('/admin/dodaj-aktualnosc')->assertRedirect('/login');
    }
    /** @test */
    public function admin_can_see_add_new_news_panel(){
        $this->singIn();
        $this->get('/admin/dodaj-aktualnosc')->assertSuccessful();
    }
    /** @test */
    public function admin_can_add_new_news(){
        $data=[
            'title'=>'Amazing temporary title!',
            'date'=>Carbon::now(),
            'logo'=> UploadedFile::fake()->image('logo.jpg'),
            'content'=>'Lorem impsum',
            'gallery_file_1'=>UploadedFile::fake()->image('galleryItem1.jpg'),
            'gallery_file_2'=>UploadedFile::fake()->image('galleryItem1.jpg')
        ];
        $this->singIn();
        $this->post('/admin/dodaj-aktualnosc',$data);
        //
        $this->assertCount(1,News::all());
        //
        $news=News::first();
        $filePath="/news/{$news->directory}";
        $fileExists=function() use($news,$filePath){
            return Storage::disk('public')->exists("{$filePath}/{$news->logo}");
        };
        //
        $this->assertTrue($fileExists());
        foreach(json_decode($news['gallery']) as $galleryItem){
            $this->assertTrue(Storage::disk('public')->exists("{$filePath}/gallery/{$galleryItem}"));
        }
        //
        Storage::disk('public')->deleteDirectory($filePath);
        $this->assertFalse($fileExists());
    }
}