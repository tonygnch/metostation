<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolarRadiationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolarRadiationTable Test Case
 */
class SolarRadiationTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SolarRadiationTable
     */
    public $SolarRadiation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.solar_radiation'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SolarRadiation') ? [] : ['className' => SolarRadiationTable::class];
        $this->SolarRadiation = TableRegistry::get('SolarRadiation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SolarRadiation);

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
