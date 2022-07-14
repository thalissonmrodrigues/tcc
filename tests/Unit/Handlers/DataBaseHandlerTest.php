<?php

namespace Tests\Unit\Handlers;

use App\Http\Controllers\Handlers\DataBaseHandler;
use App\Models\Subject;
use Tests\TestCase;

class DataBaseHandlerTest extends TestCase
{
    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->handler = new DataBaseHandler();
        $this->db = new Subject();
        $this->lastObj = Subject::all()->last();
    }

    /**
     * Test getAll().
     */
    public function testGetAll()
    {
        $response = $this->handler->getAll($this->db);
        $database = Subject::all();
        $this->assertEquals($database, $response);
    }

    /**
     * Test insert().
     */
    public function testInsert()
    {
        $data = [
            'name' => 'Nome da Materia de Test' . rand(1000000, 9999999),
        ];
        $response = $this->handler->insert($this->db, $data);
        $this->assertEquals(true, $response);
    }

    /**
     * Test get().
     */
    public function testGet()
    {
        $data = [
            'name' => 'Nome da Materia de Test' . rand(1000000, 9999999),
        ];
        $this->handler->insert($this->db, $data);
        $response = $this->handler->get($this->db, $data);
        $this->assertEquals($data['name'], $response[0]->name);
    }

    /**
     * Test getById().
     */
    public function testGetById()
    {
        $response = $this->handler->getById($this->db, $this->lastObj->id);
        $this->assertEquals($this->lastObj->name, $response->name);
    }

    /**
     * Test update().
     */
    public function testUpdate()
    {
        $data = [
            'name' => 'Nome da Materia de Test' . rand(1000000, 9999999),
        ];
        $response = $this->handler->update($this->db, $this->lastObj->id, $data);
        $this->assertEquals(true, $response);
    }

    /**
     * Test delete().
     */
    public function testeDelete()
    {
        $data = [
            'name' => 'Nome da Materia de Test' . rand(1000000, 9999999),
        ];
        $this->handler->insert($this->db, $data);
        $response = $this->handler->delete($this->db, $this->lastObj->id, $data);
        $this->assertEquals(true, $response);
    }
}
