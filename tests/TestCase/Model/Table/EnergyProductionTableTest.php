<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnergyProductionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnergyProductionTable Test Case
 */
class EnergyProductionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EnergyProductionTable
     */
    public $EnergyProduction;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.energy_production'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EnergyProduction') ? [] : ['className' => EnergyProductionTable::class];
        $this->EnergyProduction = TableRegistry::get('EnergyProduction', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EnergyProduction);

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
