<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HistorialesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HistorialesTable Test Case
 */
class HistorialesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HistorialesTable
     */
    public $Historiales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.historiales',
        'app.pacientes',
        'app.users',
        'app.recetas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Historiales') ? [] : ['className' => 'App\Model\Table\HistorialesTable'];
        $this->Historiales = TableRegistry::get('Historiales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Historiales);

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
