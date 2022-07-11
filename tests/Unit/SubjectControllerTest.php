<?php

namespace Tests\Unit;

use App\Models\Subject;
use Tests\TestCase;

class SubjectControllerTest extends TestCase
{

    /**
     * Test store().
     */
    public function testStore()
    {
        $objTest = new Subject();
        $objTest->name = 'Nome da Materia de Test' . rand(1000000, 9999999);
        $response = $this->post('/materias/adiciona', $objTest->toArray());
        $response->assertStatus(302);
        $response->assertRedirect(route('list.subject'));
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
     * Test edit().
     */
    public function testEdit()
    {
        $this->withoutMiddleware();
        $objTest = Subject::latest()->first();
        $response = $this->get('/materias/'.$objTest->id.'/editar');
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
        $objTest = Subject::latest()->first();
        $objTest->name = 'Nome da Materia de Test' . rand(1000000, 9999999);
        $response = $this->post('/materias/'.$objTest->id.'/editar', $objTest->toArray());
        $response->assertStatus(302);
        $response->assertRedirect(route('list.subject'));
        $newObj =  Subject::where('id', $objTest->id)->first();
        $this->assertEquals($objTest->name, $newObj->name);
    }

    /**
     * Test destroy().
     */
    public function testDestroy()
    {
        $objTest = Subject::latest()->first();
        $response = $this->delete('/materias/'.$objTest->id.'/delete', $objTest->toArray());
        $response->assertStatus(302);
        $response->assertRedirect(route('list.subject'));
        $output =  Subject::where('id', $objTest->id)->first();
        $this->assertEquals(NULL, $output);
    }
}
