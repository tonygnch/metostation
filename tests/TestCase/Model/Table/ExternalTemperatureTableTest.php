<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExternalTemperatureTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExternalTemperatureTable Test Case
 */
class ExternalTemperatureTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ExternalTemperatureTable
     */
    public $ExternalTemperature;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.external_temperature'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ExternalTemperature') ? [] : ['className' => ExternalTemperatureTable::class];
        $this->ExternalTemperature = TableRegistry::get('ExternalTemperature', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ExternalTemperature);

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
