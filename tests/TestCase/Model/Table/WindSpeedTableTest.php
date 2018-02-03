<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WindSpeedTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WindSpeedTable Test Case
 */
class WindSpeedTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WindSpeedTable
     */
    public $WindSpeed;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.wind_speed'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WindSpeed') ? [] : ['className' => WindSpeedTable::class];
        $this->WindSpeed = TableRegistry::get('WindSpeed', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WindSpeed);

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
