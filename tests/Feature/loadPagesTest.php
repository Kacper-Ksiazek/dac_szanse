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

    /** @test */
    public function load_zajecia(){
        $this->get('/dzialalnosc/zajecia')->assertSee(view('pages.activities.tasks.index'));
    }

    /** @test */
    public function load_zajecia_psychologiczno_pedagogiczne(){
        $this->get('/dzialalnosc/zajecia/psychologiczno-pedaogiczno-logopedyczne')->assertSee(view('pages.activities.tasks.psychologiczno_pedagogiczne'));
    }

    /** @test */
    public function load_zajecia_sala_swiata(){
        $this->get('/dzialalnosc/zajecia/sala-doswiadczania-swiata')->assertSee(view('pages.activities.tasks.sala_doswiadczania_swiata'));
    }
    /** @test */
    public function load_zajecia_sala_sensory(){
        $this->get('/dzialalnosc/zajecia/sala-ingegracji-sensorycznej')->assertSee(view('pages.activities.tasks.sala_ingegracji_sensorycznej'));
    }
    /** @test */
    public function load_zajecia_rehabilitacja(){
        $this->get('/dzialalnosc/zajecia/zajecia-rehabilitacyjne')->assertSee(view('pages.activities.tasks.rehabilitacja'));
    }
    /** @test */
    public function load_zajecia_hydroterapia(){
        $this->get('/dzialalnosc/zajecia/hydroterapia')->assertSee(view('pages.activities.tasks.hydroterapia'));
    }
    /** @test */
    public function load_zajecia_hipoterapia(){
        $this->get('/dzialalnosc/zajecia/hipoterapia')->assertSee(view('pages.activities.tasks.hipoterapia'));
    }
    /** @test */
    public function load_zajecia_dogoterapia(){
        $this->get('/dzialalnosc/zajecia/dogoterapia')->assertSee(view('pages.activities.tasks.dogoterapia'));
    }
    /** @test */
    public function load_zajecia_muzykoterapia(){
        $this->get('/dzialalnosc/zajecia/muzykoterapia')->assertSee(view('pages.activities.tasks.muzykoterapia'));
    }
    /** @test */
    public function load_zajecia_biofeedback(){
        $this->get('/dzialalnosc/zajecia/biofeedback')->assertSee(view('pages.activities.tasks.biofeedback'));
    }
    /** @test */
    public function load_zajecia_arteterapia(){
        $this->get('/dzialalnosc/zajecia/arteterapia')->assertSee(view('pages.activities.tasks.arteterapia'));
    }
}
