<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TratamientosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TratamientosTable Test Case
 */
class TratamientosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TratamientosTable
     */
    public $Tratamientos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tratamientos',
        'app.pacientes',
        'app.users',
        'app.historiales',
        'app.recetas',
        'app.cuentas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tratamientos') ? [] : ['className' => 'App\Model\Table\TratamientosTable'];
        $this->Tratamientos = TableRegistry::get('Tratamientos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tratamientos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
