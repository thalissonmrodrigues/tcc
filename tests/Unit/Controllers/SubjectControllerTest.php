<?php

namespace Tests\Unit;

use App\Models\Subject;
use Tests\TestCase;

class SubjectControllerTest extends TestCase
{

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $obj = new Subject();
        $obj->name = 'Nome da Materia de Test' . rand(1000000, 9999999);
        $obj->save();
        $this->objTest = Subject::all()->last();
    }

    /**
     * Test index().
     */
    public function testIndex()
    {
        $this->withoutMiddleware();
        $response = $this->get('/materias');
        $response->assertSuccessful();
        $response->assertViewIs('Subjects.ListBuilder.SubjectListBuilder');
        $response->assertViewHas('active_menu_header');
        $response->assertViewHas('subjects');
    }

    /**
     * Test create().
     */
    public function testCreate()
    {
        $this->withoutMiddleware();
        $response = $this->get('/materias/adiciona');
        $response->assertSuccessful();
        $response->assertViewIs('Subjects.Forms.SubjectForm');
        $response->assertViewHas('active_menu_header');
        $response->assertViewHas('action');
        $response->assertViewHas('name_subject');
        $response->assertViewHas('route_form');
    }

    /**
     * Test store().
     */
    public function testStore()
    {
        $response = $this->post('/materias/adiciona', $this->objTest->toArray());
        $response->assertStatus(302);
        $response->assertRedirect(route('list.subject'));
    }

    /**
     * Test show().
     */
    public function testShow()
    {
        $this->withoutMiddleware();
        $name = implode('+', explode(' ',  $this->objTest->name));
        $response = $this->get('materias/filtros?name='. $name);
        $response->assertSuccessful();
        $response->assertViewIs('Subjects.ListBuilder.SubjectListBuilder');
        $response->assertViewHas('active_menu_header');
        $response->assertViewHas('subjects');
    }

    /**
     * Test edit().
     */
    public function testEdit()
    {
        $this->withoutMiddleware();
        $response = $this->get('/materias/'.$this->objTest['id'].'/editar');
        $response->assertSuccessful();
        $response->assertViewIs('Subjects.Forms.SubjectForm');
        $response->assertViewHas('active_menu_header');
        $response->assertViewHas('action');
        $response->assertViewHas('name_subject');
        $response->assertViewHas('route_form');
    }

    /**
     * Test update().
     */
    public function testUpdate()
    {
        $response = $this->post('/materias/'.$this->objTest->id.'/editar',  $this->objTest->toArray());
        $response->assertStatus(302);
        $response->assertRedirect(route('list.subject'));
    }

    /**
     * Test destroy().
     */
    public function testDestroy()
    {
        $response = $this->delete('/materias/'.$this->objTest->id.'/delete', $this->objTest->toArray());
        $response->assertStatus(302);
        $response->assertRedirect(route('list.subject'));
    }
}
