<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class loadPagesTest extends TestCase
{
    /** @test */
    public function load_our_objects_index_page(){
        $this->get('/nasze-placowki')->assertSee(view('pages.our_objects.index'));
    }
    
    /** @test */
    public function ourObjectTest(){
        $this->get('/nasze-placowki/niepubliczny-osrodek-rewalidacyjno-wychowawczy')->assertSee(view('pages.our_objects.rewalidacyjno-wychowawczy'));
    }

    /** @test */
    public function load_dayroom_page(){
        $this->get('/nasze-placowki/swietlica-terapeutyczno-integracyjna-szansa')->assertSee(view('pages.our_objects.swietlica'));
    }
}
